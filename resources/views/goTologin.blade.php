@extends('Components.Layout')

@section('title', 'Log in')

@section('content')
<main class="login-main">
    <div class="background-blur"></div>
    <div class="login-container">
        <h1>Login</h1>

        <!-- Single Login Form -->
        <form id="loginForm" action="{{ route('login') }}" method="POST">
            @csrf
            <!-- Name input -->
            <input type="text" name="name" placeholder="Enter your name" value="{{ old('name') }}" required pattern="[A-Za-z]+" title="Only alphabetic characters are allowed.">

            @if ($errors->has('name'))
                <div class="error-message" style="color: red;">
                    {{ $errors->first('name') }}
                </div>
            @endif

            <!-- Birthday input -->
            <div id="birthdayInput">
                <label for="birthday">Enter your birthday:</label>
                <input type="date" name="birthday" id="birthday" min="1900-01-01" required>

                @if ($errors->has('birthday'))
                    <div class="error-message">
                        {{ $errors->first('birthday') }}
                    </div>
                @endif
            </div>

            <!-- Login button -->
            <button type="submit">Login</button>
            <div class="image-container"></div>
        </form>
    </div>
</main>
@endsection
