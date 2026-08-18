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
            'product' => 'nullable|string',
            'subject' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        if (empty($validatedData['product'])) {
            $validatedData['product'] = $request->input('inquiry_type', 'Industrial Process Equipment');
        }

        if (empty($validatedData['subject'])) {
            $validatedData['subject'] = 'Inquiry for ' . $validatedData['product'];
        }

        // 2. Define the recipient from your .env
        $recipient = config('mail.from.address', 'info@vishwakarmaengineering.co');
        
        // 3. Send out the email using Laravel's robust mailer
        try {
            $resendApiKey = env('RESEND_API_KEY');
            
            if ($resendApiKey) {
                // Use Resend HTTP API to bypass Render's blocked SMTP ports
                $html = view('emails.inquiry', ['data' => $validatedData])->render();
                $fromAddress = config('mail.from.address', 'onboarding@resend.dev');
                $fromName = config('mail.from.name', 'Vishwakarma Engineering');

                \Illuminate\Support\Facades\Http::withToken($resendApiKey)->post('https://api.resend.com/emails', [
                    'from' => $fromName . ' <' . $fromAddress . '>',
                    'to' => $recipient,
                    'subject' => 'New Inquiry: ' . $validatedData['subject'],
                    'html' => $html,
                    'reply_to' => $validatedData['email']
                ]);
            } else {
                // Standard SMTP (Works locally, but gets blocked on Render Free)
                Mail::to($recipient)->send(new InquiryMail($validatedData));
            }
        } catch (\Exception $e) {
            // Log the error but still redirect back to the contact form
            \Illuminate\Support\Facades\Log::error('Mail sending failed: ' . $e->getMessage());
        }

        // 4. Redirect back with success message
        return back()->with('success', 'Thank you! Your inquiry has been received. We will get in touch with you shortly.');
    }
}
