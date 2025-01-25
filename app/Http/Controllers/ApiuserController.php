<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApiuserController extends Controller
{
    public function register(Request $request)
    {
        $post = new User(); 

        $post-> fullName = $request -> fullName;
        $post-> email = $request -> email;
        $post-> password = $request -> password;
        $post-> birthYear = $request -> birthYear;
        $post-> country = $request -> country;
        $post-> city = $request -> city;
        $post-> alertType = $request -> alertType;

         return response()->json([
                'message' => 'User has been registered successfully!'
         ]);
    }
}
