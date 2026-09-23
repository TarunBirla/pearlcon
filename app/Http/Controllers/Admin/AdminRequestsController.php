<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RegistrationRequest;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AdminRequestsController extends Controller
{
    public function index(Request $request)
    {
        $query = RegistrationRequest::query();

        // Search filter
        if ($search = trim($request->input('search', ''))) {
            $query->where(function ($q) use ($search) {
                $q->where('full_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('company', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('item_part_number', 'like', "%{$search}%");
            });
        }

        // Status filter
        if ($status = $request->input('status')) {
            $query->where('status', $status);
        }

        // Industry filter
        if ($industry = $request->input('industry')) {
            $query->where('activities', 'like', "%{$industry}%");
        }

        // Date range filter
        if ($dateFrom = $request->input('date_from')) {
            $query->whereDate('created_at', '>=', $dateFrom);
        }
        if ($dateTo = $request->input('date_to')) {
            $query->whereDate('created_at', '<=', $dateTo);
        }

        $requests = $query->orderByDesc('id')->paginate(10)->withQueryString();

        $statuses = ['New', 'In Progress', 'Responded', 'Closed'];
        $industries = [
            'OIL, GAS & PETROCHEMICALS',
            'AEROSPACE & AVIATION',
            'CHEMICALS & LUBRICANTS',
            'MINING & DRILLING',
            'LAB EQUIPMENT',
            'RAILWAYS',
            'OTHERS',
        ];

        return view('admin.requests.index', compact('requests', 'statuses', 'industries'));
    }

    public function updateStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|string|in:New,In Progress,Responded,Closed',
        ]);

        $item = RegistrationRequest::findOrFail($id);
        $item->status = $validated['status'];
        $item->save();

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Status updated successfully.']);
        }

        return back()->with('success', 'Request status updated successfully.');
    }

    public function exportCsv(Request $request)
    {
        $query = RegistrationRequest::query();

        if ($search = trim($request->input('search', ''))) {
            $query->where(function ($q) use ($search) {
                $q->where('full_name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('company', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('item_part_number', 'like', "%{$search}%");
            });
        }

        if ($status = $request->input('status')) {
            $query->where('status', $status);
        }

        if ($industry = $request->input('industry')) {
            $query->where('activities', 'like', "%{$industry}%");
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
                'ID', 'Full Name', 'Company Name', 'Phone', 'Email',
                'Item Part Number', 'Industries', 'Description / Quantity',
                'IP Address', 'Status', 'Submitted At'
            ]);

            foreach ($records as $row) {
                $activities = is_array($row->activities) ? implode(', ', $row->activities) : (string)$row->activities;
                fputcsv($handle, [
                    $row->id,
                    $row->full_name,
                    $row->company ?? '—',
                    $row->phone,
                    $row->email,
                    $row->item_part_number,
                    $activities,
                    $row->description_manufacturer_quantity,
                    $row->ip_address ?? '—',
                    $row->status ?? 'New',
                    $row->created_at->format('Y-m-d H:i:s'),
                ]);
            }

            fclose($handle);
        });

        $filename = 'pearlcon_quote_requests_' . date('Ymd_His') . '.csv';
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="' . $filename . '"');

        return $response;
    }
}
