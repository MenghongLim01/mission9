<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('backend.feedback1', compact('feedbacks'));
    }

    public function front()
    {
        return view('frontend.feedback');
    }

    public function feedback(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Feedback::create($request->all());

        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }
}
