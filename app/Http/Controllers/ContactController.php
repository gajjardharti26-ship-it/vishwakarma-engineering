<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InquiryMail;

class ContactController extends Controller
{
    /**
     * Handle the incoming contact form submission.
     */
    public function sendInquiry(Request $request)
    {
        // Force Laravel to destroy the config cache so it actually reads your new .env Gmail settings!
        \Illuminate\Support\Facades\Artisan::call('config:clear');

        // 1. Validate the form inputs
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'product' => 'required|string',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // 2. Define the recipient from your .env
        $recipient = config('mail.from.address', 'vishwakarma.engineers.co@gmail.com');
        
        // 3. Send out the email using Laravel's robust mailer
        try {
            Mail::to($recipient)->send(new InquiryMail($validatedData));
            
            // 4. Redirect back with success message
            return back()->with('success', 'Thank you! Your inquiry has been received. We will get in touch with you shortly.');
        } catch (\Exception $e) {
        dd($e->getMessage());
        }
    }
}
