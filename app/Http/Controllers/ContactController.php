<?php

namespace App\Http\Controllers;

use App\Mail\AdminContactNotification;
use App\Mail\UserContactNotification;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'email'      => 'required|email|max:150',
            'phone'      => 'required|string|max:30',
            'message'    => 'required|string|max:5000',
        ]);

        $contactMessage = ContactMessage::create($validated);

        $adminEmail = config('mail.admin_address', env('ADMIN_EMAIL', 'sales@pearlcon.com'));

        // Send Email Notification to Admin
        try {
            Mail::to($adminEmail)->send(new AdminContactNotification($contactMessage));
            Log::info("Contact Admin Email sent successfully for contact ID: {$contactMessage->id} to {$adminEmail}");
        } catch (\Throwable $e) {
            Log::error("Failed sending Contact Admin Email: " . $e->getMessage());
        }

        // Send Confirmation Email to User
        try {
            Mail::to($contactMessage->email)->send(new UserContactNotification($contactMessage));
            Log::info("Contact User Email sent successfully for contact ID: {$contactMessage->id} to {$contactMessage->email}");
        } catch (\Throwable $e) {
            Log::error("Failed sending Contact User Email: " . $e->getMessage());
        }

        return back()->with(
            'success',
            'Thank you for contacting us. We have received your message and sent a confirmation to your email address.'
        );
    }
}