<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
</head>
<body>
<div class="container">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h1>Register</h1>
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="btn">
            <button class="btn" type="submit">Register</button>
        </div>
        @if ($errors->has('email'))
            <span style="color: red;"  class="invalid-feedback">
        <strong>{{ $errors->first('email') }}</strong>
             </span>
        @endif
        @if ($errors->has('password'))
            <span style="color: red"  class="invalid-feedback">
        <strong>{{ $errors->first('password') }}</strong>
             </span>
        @endif
    </form>
    <div class="register-link">
        Already have an account? <a href="{{ route('login') }}">Log in</a>
    </div>
</div>
</body>
</html>

