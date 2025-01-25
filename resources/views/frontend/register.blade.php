@extends('layout.master')

@section('content')

<body>
    <style>
        .form-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
    <div class="form-container">
        <h2>Register</h2>
        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName" value="{{ old('fullName') }}" required>
                @error('fullName')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="birthYear">Birth Year</label>
                <input type="number" id="birthYear" name="birthYear" min="1900" max="2024" value="{{ old('birthYear') }}" required>
                @error('birthYear')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" id="country" name="country" value="{{ old('country') }}" required>
                @error('country')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" name="city" value="{{ old('city') }}" required>
                @error('city')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="alertType">Alert Type</label>
                <select id="alertType" name="alertType" required>
                    <option value="heavy-rain" {{ old('alertType') == 'heavy-rain' ? 'selected' : '' }}>Heavy Rain</option>
                    <option value="fire-disaster" {{ old('alertType') == 'fire-disaster' ? 'selected' : '' }}>Fire Disaster</option>
                    <option value="flood" {{ old('alertType') == 'flood' ? 'selected' : '' }}>Flood</option>
                    <option value="tornado" {{ old('alertType') == 'tornado' ? 'selected' : '' }}>Tornado</option>
                </select>
                @error('alertType')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
@endsection