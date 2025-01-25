<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    private $apiKey;

    public function __construct()
    {
        $this->apiKey = env('OPENWEATHER_API_KEY');
    }

    public function getWeather(Request $request)
    {
        $city = $request->query('city');
        $lat = $request->query('lat');
        $lon = $request->query('lon');

        // Check if city or coordinates are provided
        if (!$city && (!$lat || !$lon)) {
            return response()->json(['error' => 'City or coordinates required'], 400);
        }

        // Construct the URL based on provided parameters
        if ($city) {
            $url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&units=metric&appid={$this->apiKey}";
        } else {
            $url = "https://api.openweathermap.org/data/2.5/weather?lat={$lat}&lon={$lon}&units=metric&appid={$this->apiKey}";
        }

        try {
            // Make the HTTP request using Laravel's HTTP client
            $response = Http::get($url);

            if ($response->successful()) {
                return $response->json();
            } else {
                return response()->json(['error' => 'Failed to fetch weather data'], $response->status());
            }
        } catch (Exception $e) {
            return response()->json(['error' => 'Failed to fetch weather data: ' . $e->getMessage()], 500);
        }
    }

    public function getForecast(Request $request)
    {
        $city = $request->query('city');
        $lat = $request->query('lat');
        $lon = $request->query('lon');

        // Check if city or coordinates are provided
        if (!$city && (!$lat || !$lon)) {
            return response()->json(['error' => 'City or coordinates required'], 400);
        }

        // Construct the URL based on provided parameters
        if ($city) {
            $url = "https://api.openweathermap.org/data/2.5/forecast?q={$city}&units=metric&appid=" . $this->apiKey;
        } else {
            $url = "https://api.openweathermap.org/data/2.5/forecast?lat={$lat}&lon={$lon}&units=metric&appid=" . $this->apiKey;
        }

        try {
            // Make the HTTP request using Laravel's HTTP client
            $response = Http::get($url);

            if ($response->successful()) {
                return $response->json();
            } else {
                return response()->json(['error' => 'Failed to fetch forecast data'], $response->status());
            }
        } catch (Exception $e) {
            return response()->json(['error' => 'Failed to fetch forecast data: ' . $e->getMessage()], 500);
        }
    }

    public function showDashboard()
    {
        return view('frontend.weather');
    }
}
