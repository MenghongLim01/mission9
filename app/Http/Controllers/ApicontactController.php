<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ApicontactController extends Controller
{
    public function contactus(Request $request)
    {
        $post = new contact();

        $post -> name = $request -> name;
        $post -> email = $request -> email;
        $post -> subject = $request -> subject;
        $post -> message = $request -> message;

        return response()-> json([
            'message' => 'Your message has been sent!'
        ]);
    }
}
