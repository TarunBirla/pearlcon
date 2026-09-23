<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AdminContactsController extends Controller
{
    public function index(Request $request)
    {
        $query = ContactMessage::query();

        // Search filter
        if ($search = trim($request->input('search', ''))) {
            $query->where(function ($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        // Status filter
        if ($status = $request->input('status')) {
            $query->where('status', $status);
        }

        // Date range filter
        if ($dateFrom = $request->input('date_from')) {
            $query->whereDate('created_at', '>=', $dateFrom);
        }
        if ($dateTo = $request->input('date_to')) {
            $query->whereDate('created_at', '<=', $dateTo);
        }

        $messages = $query->orderByDesc('id')->paginate(10)->withQueryString();

        $statuses = ['New', 'In Progress', 'Replied', 'Closed'];

        return view('admin.contacts.index', compact('messages', 'statuses'));
    }

    public function updateStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|string|in:New,In Progress,Replied,Closed',
        ]);

        $item = ContactMessage::findOrFail($id);
        $item->status = $validated['status'];
        $item->save();

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Contact message status updated.']);
        }

        return back()->with('success', 'Contact message status updated successfully.');
    }

    public function exportCsv(Request $request)
    {
        $query = ContactMessage::query();

        if ($search = trim($request->input('search', ''))) {
            $query->where(function ($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        if ($status = $request->input('status')) {
            $query->where('status', $status);
        }

        if ($dateFrom = $request->input('date_from')) {
            $query->whereDate('created_at', '>=', $dateFrom);
        }
        if ($dateTo = $request->input('date_to')) {
            $query->whereDate('created_at', '<=', $dateTo);
        }

        $records = $query->orderByDesc('id')->get();

        $response = new StreamedResponse(function () use ($records) {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, [
                'ID', 'First Name', 'Last Name', 'Email', 'Phone',
                'Message', 'Status', 'Submitted At'
            ]);

            foreach ($records as $row) {
                fputcsv($handle, [
                    $row->id,
                    $row->first_name,
                    $row->last_name,
                    $row->email,
                    $row->phone,
                    $row->message,
                    $row->status ?? 'New',
                    $row->created_at ? $row->created_at->format('Y-m-d H:i:s') : '—',
                ]);
            }

            fclose($handle);
        });

        $filename = 'pearlcon_contact_messages_' . date('Ymd_His') . '.csv';
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="' . $filename . '"');

        return $response;
    }
}
