<?php

namespace App\Http\Controllers;

use App\Models\EmergencyRequest;
use Illuminate\Http\Request;

class EmergencyRequestController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'fullName' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'city' => 'required',
            'emergency_request' => 'required',
        ]);

        EmergencyRequest::create([
            'full_name' => $request->fullName,
            'email' => $request->email,
            'country' => $request->country,
            'city' => $request->city,
            'request' => $request->emergency_request,
        ]);

        return redirect()->back()->with('success', 'Your emergency request has been submitted.');
    }

    public function index()
    {
        $requests = EmergencyRequest::all();
        return view('backend.emergency-request1', compact('requests'));
    }

    public function front()
    {
        return view('frontend.emergency_request');
    }
}
