<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save to database
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Send email notification (optional)
        Mail::raw("New Contact Inquiry:\n\nName: {$request->name}\nEmail: {$request->email}\nPhone: {$request->phone}\nSubject: {$request->subject}\nMessage: {$request->message}", function ($mail) use ($request) {
            $mail->to('support@healthysmiles.com')
                ->subject('New Contact Inquiry from ' . $request->name);
        });

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}

