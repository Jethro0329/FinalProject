@extends('Components.Layout')

@section('title', 'Log in')

@section('content')
<main class="login-main">
    <div class="background-blur"></div>
    <div class="login-container">
        
        <!-- Logo and Company Name -->
        <div class="logo-container">
            <img src="{{ asset('css/logo.png') }}" alt="Logo" class="logo">
        </div>

        <h1>Login</h1>
        <p>Welcome back!</p>


        <!-- Single Login Form -->
        <form id="loginForm" action="{{ route('login') }}" method="POST">
            @csrf
            <!-- Name input -->
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Enter your name" value="{{ old('name') }}" required pattern="[A-Za-z]+" title="Only alphabetic characters are allowed.">

                @if ($errors->has('name'))
                    <div class="error-message" style="color: red;">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>

            <!-- Birthday input -->
            <div class="input-group">
                <label for="birthday">Enter your birthday:</label>
                <input type="date" name="birthday" id="birthday" min="1900-01-01" value="{{ old('birthday') }}" required>

                @if ($errors->has('birthday'))
                    <div class="error-message">
                        {{ $errors->first('birthday') }}
                    </div>
                @endif
            </div>

            <!-- Remember Me -->
            <div class="remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember this device</label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="login-button">Login</button>

            <!-- Divider -->
            <div class="divider">
                <span>or sign in with</span>
            </div>

            <!-- Third-party Sign-in Options -->
            <div class="social-login">
                <button class="google-button">Google</button>
                <button class="facebook-button">Facebook</button>
                <button class="instagram-button">Instagram</button>
            </div>
        </form>
    </div>
</main>
@endsection
