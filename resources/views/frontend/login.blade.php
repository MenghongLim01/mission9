<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .login-box {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #555;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .login-button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .login-button:hover {
            background-color: #0056b3;
        }

        .extra-links {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .extra-links a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }

        .extra-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    @include('layout.header')

    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="login-button">Login</button>
            </form>
            <div class="extra-links">
                <a href="{{ route('register') }}">Register</a>
            </div>
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
