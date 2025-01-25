<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApiloginController extends Controller
{
    public function login(Request $request)
    {    
        $post = new User(); 

        $post-> email = $request -> email;
        $post-> passsword = $request -> password;
        
        return response()->json([
            'message' => 'User has been login successfully!'
     ]);
}
}
