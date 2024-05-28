<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <link rel="stylesheet" href="{{asset('css/404.css')}}">
</head>
<body>
<div class="container">
    <div class="content">
        <h1>Oops! Page not found.</h1>
        <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
        <a href="{{route('home')}}" class="btn">Go to Home</a>
    </div>
</div>
</body>
</html>
