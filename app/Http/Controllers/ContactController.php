<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'contact_full_name' => 'required|string|max:255',
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'required|string|max:15',
            'contact_message' => 'required|string',
        ]);

        // Create a new contact message
        $contact = Contact::create([
            'full_name' => $request->contact_full_name,
            'email' => $request->contact_email,
            'phone' => $request->contact_phone,
            'message' => $request->contact_message,
        ]);

        // Send an email notification
        Mail::to('sabeltdrw@gmail.com')->send(new ContactMail($contact));

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
