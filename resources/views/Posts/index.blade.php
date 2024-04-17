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
@foreach($posts as $post)
         <img src="{{asset('storage/' . $post->photo) }} " alt="photos">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->text }}</p>

@endforeach
</body>
</html>
