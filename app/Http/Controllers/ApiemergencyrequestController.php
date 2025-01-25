<?php

namespace App\Http\Controllers;
use App\Models\EmergencyRequest;

use Illuminate\Http\Request;

class ApiemergencyrequestController extends Controller
{
    public function request(Request $request)
    {
        $post = new EmergencyRequest();
        
        $post-> full_name =$request -> full_name;
        $post-> email = $request -> email;
        $post-> country = $request-> country;
        $post->city = $request->city;
        $post->emergency_request = $request->emergency_request;

        return response()->json([
            'message' => 'User request has been sent!'
     ]);
    } 
}
