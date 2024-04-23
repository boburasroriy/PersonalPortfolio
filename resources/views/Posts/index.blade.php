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
         <img style="width: 250px" src="{{asset('storage/' . $post->photo) }} " alt="photos">
        <h2>{{ $post->title }} </h2>
         <p>{{$post->category->name}}</p>
        <p>{{ $post->text }}</p>

@endforeach
<div style="display: flex; justify-content: center; text-decoration: none">
    <p style="text-decoration: none">
        {{ $posts->links('vendor.pagination.bootstrap-4') }}

    </p>
</div>
</body>
</html>
