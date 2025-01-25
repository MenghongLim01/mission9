@extends('layout.master')

@section('content')
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Weather</h5>
            <h1 class="display-5 mb-0">Live Weather Updates</h1>
        </div>
        <div class="weather-dashboard">
            <h1>Weather Dashboard</h1>
            <div class="search-box">
                <input type="text" id="cityName" placeholder="Enter city name">
                <button id="searchBtn">Search</button>
                <span>OR</span>
                <button id="locationBtn">Use Current Location</button>
            </div>
            <div class="current-weather" id="currentWeather">
                <h2>City (Country)</h2>
                <p>Temperature: __°C</p>
                <p>Wind: __ M/S</p>
                <p>Humidity: __%</p>
            </div>
            <h2>5-Day Forecast</h2>
            <div class="forecast" id="forecast">
                <div class="day">
                    <h3>Day 1</h3>
                    <p>Temp: __°C</p>
                    <p>Wind: __ M/S</p>
                    <p>Humidity: __%</p>
                </div>
                <!-- Repeat for other days -->
            </div>
        </div>
    </div>
</div>

<style>
    .weather-dashboard {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
        margin-top: 40px;
    }

    .weather-dashboard h1 {
        color: #ff4d4d;
        margin-bottom: 20px;
    }

    .weather-dashboard .search-box {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }

    .weather-dashboard .search-box input {
        flex-grow: 1;
        padding: 10px;
        font-size: 16px;
        border: 2px solid #ccc;
        border-radius: 4px;
        margin-right: 10px;
        max-width: 300px;
    }

    .weather-dashboard .search-box button {
        background-color: #4d79ff;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
    }

    .weather-dashboard .search-box button:hover {
        background-color: #3352cc;
    }

    .weather-dashboard .search-box span {
        margin: 0 10px;
        font-size: 18px;
    }

    .weather-dashboard .current-weather {
        background-color: #e6f7ff;
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .weather-dashboard .current-weather h2 {
        color: #3352cc;
    }

    .weather-dashboard .current-weather p {
        font-size: 18px;
        margin: 5px 0;
    }

    .weather-dashboard .forecast {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .weather-dashboard .forecast .day {
        background-color: #ffe6e6;
        padding: 10px;
        border-radius: 8px;
        width: 18%;
        margin: 5px 0;
        box-sizing: border-box;
    }

    .weather-dashboard .forecast .day h3 {
        color: #ff4d4d;
        margin: 0 0 10px 0;
    }

    .weather-dashboard .forecast .day p {
        font-size: 16px;
        margin: 5px 0;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.getElementById('searchBtn').addEventListener('click', function() {
        const city = document.getElementById('cityName').value;
        if (city) {
            getWeatherData(city);
            getForecastData(city);
        } else {
            alert('Please enter a city name.');
        }
    });

    document.getElementById('locationBtn').addEventListener('click', function() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                const lat = position.coords.latitude;
                const lon = position.coords.longitude;
                getWeatherDataByCoords(lat, lon);
                getForecastDataByCoords(lat, lon);
            });
        } else {
            alert('Geolocation is not supported by this browser.');
        }
    });

    const apiKey = '{{ env("OPENWEATHER_API_KEY") }}'; // Fetching API key from environment

    function getWeatherData(city) {
        axios.get(`{{ url("/api/weather/getWeather") }}?city=${city}`)
            .then(response => {
                const data = response.data;
                document.getElementById('currentWeather').innerHTML = `
                    <h2>${data.name} (${data.sys.country})</h2>
                    <p>Temperature: ${data.main.temp}°C</p>
                    <p>Wind: ${data.wind.speed} M/S</p>
                    <p>Humidity: ${data.main.humidity}%</p>
                `;
            })
            .catch(error => {
                console.error(error);
                alert('Failed to fetch weather data.');
            });
    }

    function getWeatherDataByCoords(lat, lon) {
        axios.get(`{{ url("/api/weather/getWeather") }}?lat=${lat}&lon=${lon}`)
            .then(response => {
                const data = response.data;
                document.getElementById('currentWeather').innerHTML = `
                    <h2>${data.name} (${data.sys.country})</h2>
                    <p>Temperature: ${data.main.temp}°C</p>
                    <p>Wind: ${data.wind.speed} M/S</p>
                    <p>Humidity: ${data.main.humidity}%</p>
                `;
            })
            .catch(error => {
                console.error(error);
                alert('Failed to fetch weather data.');
            });
    }

    function getForecastData(city) {
        axios.get(`{{ url("/api/weather/getForecast") }}?city=${city}`)
            .then(response => {
                const data = response.data.list.slice(0, 5);
                const forecastContainer = document.getElementById('forecast');
                forecastContainer.innerHTML = '';
                data.forEach((day, index) => {
                    const dayElement = document.createElement('div');
                    dayElement.classList.add('day');
                    dayElement.innerHTML = `
                        <h3>Day ${index + 1}</h3>
                        <p>Temp: ${day.main.temp}°C</p>
                        <p>Wind: ${day.wind.speed} M/S</p>
                        <p>Humidity: ${day.main.humidity}%</p>
                    `;
                    forecastContainer.appendChild(dayElement);
                });
            })
            .catch(error => {
                console.error(error);
                alert('Failed to fetch forecast data.');
            });
    }

    function getForecastDataByCoords(lat, lon) {
        axios.get(`{{ url("/api/weather/getForecast") }}?lat=${lat}&lon=${lon}`)
            .then(response => {
                const data = response.data.list.slice(0, 5);
                const forecastContainer = document.getElementById('forecast');
                forecastContainer.innerHTML = '';
                data.forEach((day, index) => {
                    const dayElement = document.createElement('div');
                    dayElement.classList.add('day');
                    dayElement.innerHTML = `
                        <h3>Day ${index + 1}</h3>
                        <p>Temp: ${day.main.temp}°C</p>
                        <p>Wind: ${day.wind.speed} M/S</p>
                        <p>Humidity: ${day.main.humidity}%</p>
                    `;
                    forecastContainer.appendChild(dayElement);
                });
            })
            .catch(error => {
                console.error(error);
                alert('Failed to fetch forecast data.');
            });
    }
</script>
@endsection