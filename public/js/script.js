$(document).ready(function () {
    $("#searchBtn").click(function () {
        const city = $("#cityName").val();
        fetchWeather(city);
    });

    $("#locationBtn").click(function () {
        // Mock data for current location
        const weatherData = {
            city: "Current Location",
            country: "MockCountry",
            temp: 28,
            wind: 6,
            humidity: 65,
            forecast: [
                { day: "Day 1", temp: 26, wind: 5, humidity: 60 },
                { day: "Day 2", temp: 27, wind: 4, humidity: 62 },
                { day: "Day 3", temp: 29, wind: 5, humidity: 64 },
                { day: "Day 4", temp: 30, wind: 6, humidity: 66 },
                { day: "Day 5", temp: 31, wind: 5, humidity: 68 },
            ],
        };
        updateCurrentWeather(weatherData);
    });
});

function fetchWeather(city) {
    if (city) {
        // Mock data for demonstration
        const weatherData = {
            city: city,
            country: "MockCountry",
            temp: 25,
            wind: 5,
            humidity: 60,
            forecast: [
                { day: "Day 1", temp: 22, wind: 4, humidity: 55 },
                { day: "Day 2", temp: 24, wind: 3, humidity: 60 },
                { day: "Day 3", temp: 23, wind: 6, humidity: 65 },
                { day: "Day 4", temp: 26, wind: 5, humidity: 70 },
                { day: "Day 5", temp: 27, wind: 4, humidity: 75 },
            ],
        };
        updateCurrentWeather(weatherData);
    }
}

function updateCurrentWeather(data) {
    $("#currentWeather").html(`
        <h2>${data.city} (${data.country})</h2>
        <p>Temperature: ${data.temp}°C</p>
        <p>Wind: ${data.wind} M/S</p>
        <p>Humidity: ${data.humidity}%</p>
    `);

    const forecastContainer = $("#forecast");
    forecastContainer.html("");
    data.forecast.forEach((day) => {
        const dayDiv = $(`
            <div class="day">
                <h3>${day.day}</h3>
                <p>Temp: ${day.temp}°C</p>
                <p>Wind: ${day.wind} M/S</p>
                <p>Humidity: ${day.humidity}%</p>
            </div>
        `);
        forecastContainer.append(dayDiv);
    });
}
