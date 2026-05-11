<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSubmissionMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'conName' => 'required|string|max:255',
            'conEmail' => 'required|email|max:255',
            'conPhone' => 'required|string|max:20',
            'conSubject' => 'nullable|string|max:255',
            'conMessage' => 'required|string',
        ]);

        $contact = Contact::create([
            'name' => $validated['conName'],
            'email' => $validated['conEmail'],
            'phone' => $validated['conPhone'],
            'subject' => $validated['conSubject'],
            'message' => $validated['conMessage'],
        ]);

        // Send email to info@truenorthbuild.ca
        try {
            Mail::to('info@truenorthbuild.ca')->send(new ContactSubmissionMail($contact));
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            \Log::error('Mail sending failed: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
