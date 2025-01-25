<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class ApifeedbackController extends Controller
{
    public function feedback(Request $request)
    {    
        $post = new Feedback(); 

        $post-> name = $request -> name;
        $post-> email = $request -> email;
        $post-> subject = $request -> subject;
        $post-> message = $request -> message;
        
        return response()->json([
            'message' => 'User feedback has been sent successfully!'
     ]);
}
}
