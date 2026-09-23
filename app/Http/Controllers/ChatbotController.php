<?php

namespace App\Http\Controllers;

use App\Mail\AdminChatbotNotification;
use App\Mail\UserChatbotNotification;
use App\Models\ChatbotRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ChatbotController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'                => 'required|string|max:150',
            'email'               => 'required|email|max:150',
            'phone'               => 'required|string|max:40',
            'subject_description' => 'required|string|max:5000',
        ]);

        $chatbotRequest = ChatbotRequest::create([
            'name'                => $validated['name'],
            'email'               => $validated['email'],
            'phone'               => $validated['phone'],
            'subject_description' => $validated['subject_description'],
            'ip_address'          => $request->ip(),
            'status'              => 'pending',
        ]);

        // Send Email Notification to Admin
        $adminEmail = config('mail.admin_address', env('ADMIN_EMAIL', 'sales@pearlcon.com'));
        try {
            Mail::to($adminEmail)->send(new AdminChatbotNotification($chatbotRequest));
            Log::info("Chatbot Admin Email sent successfully for request ID: {$chatbotRequest->id} to {$adminEmail}");
        } catch (\Throwable $e) {
            Log::error("Failed sending Chatbot Admin Email: " . $e->getMessage());
        }

        // Send Confirmation Email to User
        try {
            Mail::to($chatbotRequest->email)->send(new UserChatbotNotification($chatbotRequest));
            Log::info("Chatbot User Email sent successfully for request ID: {$chatbotRequest->id} to {$chatbotRequest->email}");
        } catch (\Throwable $e) {
            Log::error("Failed sending Chatbot User Email: " . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your request has been sent to our team and a confirmation email has been sent to you.',
            'data'    => [
                'id'    => $chatbotRequest->id,
                'name'  => $chatbotRequest->name,
                'email' => $chatbotRequest->email,
            ],
        ]);
    }
}
