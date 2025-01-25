
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <style>
    

        .confirmation-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .confirmation-box {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            text-align: center;
        }

        .confirmation-box h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .confirmation-box p {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }

        .confirmation-box .confirm-button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .confirmation-box .confirm-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    @include('layout.header')

    <div class="confirmation-container">
        <div class="confirmation-box">
            <h2>Registration Successful</h2>
            <p>Thank you for registering! Your account has been successfully created.</p>
            <button class="confirm-button" onclick="window.location.href='{{ url('/') }}'">Go to Homepage</button>
        </div>
    </div>

    @include('layout.footer')

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('resources/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('resources/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('resources/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('resources/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('resources/js/main.js') }}"></script>
</body>
</html>
