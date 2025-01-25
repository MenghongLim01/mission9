<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmergencyRequestController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\FeedbackController;

// Home page route
Route::view('/', 'frontend.index')->name('index');

// About page route
Route::view('/about', 'frontend.about')->name('about');

// Registration routes
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register.store');

// Login routes
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login.show');
Route::post('/login', [UserController::class, 'login'])->name('login');

// User list route
Route::get('/backend/user-information', [UserController::class, 'showUserList'])->name('backend.user-information');
Route::get('/backend/edit-user/{id}', [UserController::class, 'editUser'])->name('backend.edit');
Route::post('/backend/deactivate-user/{id}', [UserController::class, 'deactivateUser'])->name('backend.deactivate');

// Emergency request routes
Route::get('/emergency_request', [EmergencyRequestController::class, 'front'])->name('emergency_request');
Route::post('/emergency_request', [EmergencyRequestController::class, 'store'])->name('emergency-request.store');

// Contact routes
Route::get('/contact-page', [ContactController::class, 'front'])->name('contact.page');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::get('/backend/contacts', [ContactController::class, 'index'])->name('backend.contacts');
Route::post('/backend/contacts/update/{id}', [ContactController::class, 'updateStatus'])->name('contacts.update');

// Feedback routes
Route::get('/feedback', [FeedbackController::class, 'front'])->name('feedback');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

// Weather routes
Route::get('/weather', [WeatherController::class, 'getWeather']);
Route::get('/forecast', [WeatherController::class, 'getForecast']);
Route::get('/weather-dashboard', [WeatherController::class, 'showDashboard'])->name('weather.dashboard');

// Confirmation page route
Route::get('/confirm', function () {
    return view('frontend.confirm');
})->name('confirm');

// Backend routes
Route::get('/backend/emergency-request', [EmergencyRequestController::class, 'index'])->name('backend.emergency-request');
Route::get('/backend/feedback', [FeedbackController::class, 'index'])->name('backend.feedback');
Route::get('/backend/contact', [ContactController::class, 'index'])->name('backend.contact');
