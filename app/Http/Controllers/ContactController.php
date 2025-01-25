<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('backend.contact1', compact('contacts'));
    }
    public function show()
    {
        return view('frontend.contact');
    }

    public function front()
    {
        return view('frontend.contact-page');
    }

    public function contactus(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    public function updateStatus(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->status = 'Resolved';
        $contact->save();

        return redirect()->route('contacts.index')->with('success', 'Contact status updated successfully!');
    }
}
