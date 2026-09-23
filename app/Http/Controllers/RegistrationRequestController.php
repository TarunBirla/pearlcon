<?php

namespace App\Http\Controllers;

use App\Mail\AdminRegistrationRequestNotification;
use App\Mail\UserRegistrationRequestNotification;
use App\Models\RegistrationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class RegistrationRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:150',

            'company' => 'nullable|string|max:150',

            'phone' => 'required|string|max:30',

            'email' => 'required|email|max:150',

            'item_part_number' => 'required|string|max:150',

            'activities' => 'required|array|min:1',

            'activities.*' => [
                'required',
                'string',
                Rule::in([
                    'OIL, GAS & PETROCHEMICALS',
                    'AEROSPACE & AVIATION',
                    'CHEMICALS & LUBRICANTS',
                    'MINING & DRILLING',
                    'LAB EQUIPMENT',
                    'RAILWAYS',
                    'OTHERS',
                ]),
            ],

            'description_manufacturer_quantity'
                => 'required|string|max:5000',
        ]);

        $validated['ip_address'] = $request->ip();
        $validated['status'] = 'New';

        $registrationRequest = RegistrationRequest::create($validated);

        $adminEmail = config('mail.admin_address', env('ADMIN_EMAIL', 'sales@pearlcon.com'));

        // Send Email Notification to Admin
        try {
            Mail::to($adminEmail)->send(new AdminRegistrationRequestNotification($registrationRequest));
            Log::info("Registration Request Admin Email sent successfully for ID: {$registrationRequest->id} to {$adminEmail}");
        } catch (\Throwable $e) {
            Log::error("Failed sending Registration Request Admin Email: " . $e->getMessage());
        }

        // Send Confirmation Email to User
        try {
            Mail::to($registrationRequest->email)->send(new UserRegistrationRequestNotification($registrationRequest));
            Log::info("Registration Request User Email sent successfully for ID: {$registrationRequest->id} to {$registrationRequest->email}");
        } catch (\Throwable $e) {
            Log::error("Failed sending Registration Request User Email: " . $e->getMessage());
        }

        return back()->with(
            'registration_success',
            'Your registration request has been submitted successfully. A confirmation email has been sent to your email address.'
        );
    }
}