<?php

use App\Http\Controllers\WeatherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiuserController;
use App\Http\Controllers\ApiloginController;
use App\Http\Controllers\ApiemergencyrequestController;
use App\Http\Controllers\ApifeedbackController;
use App\Http\Controllers\ApicontactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//http://127.0.0.1:8000/api
Route::get('/',
        function (){
            return response()->json([
                'message' => 'Welcome to API'
            ]);
        }
);

//http://127.0.0.1:8000/api/user-register
Route::post('/user-register',
    [
        ApiuserController::class,
         'register'
    ]
);

//http://127.0.0.1:8000/api/user-login
Route::post('/user-login',
    [
        ApiloginController::class,
         'login'
    ]
);

//http://127.0.0.1:8000/api/user-emergency-request
Route::post('/user-emergency-request',
    [
        ApiemergencyrequestController::class,
         'request'
    ]
);

//http://127.0.0.1:8000/api/user-feedback
Route::post('/user-feedback',
    [
        ApifeedbackController::class,
         'feedback'
    ]
);

//http://127.0.0.1:8000/api/user-contactus
Route::post('/user-contactus',
    [
        ApicontactController::class,
         'contactus'
    ]
);