<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
@foreach($portfolio_posts as $projectPost)
    <img src="{{asset('storage/' . $projectPost->portfolio_photo) }} " alt="photos">
    <h2>{{ $projectPost->portfolio_title }}</h2>
    <p>{{ $projectPost->portfolio_text }}</p>

@endforeach
</body>
</html>
