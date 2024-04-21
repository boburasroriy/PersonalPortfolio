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
<div style="height: 500px;width: 100%;">
<img style="height: 100%" src="{{asset('storage/' . $post->photo) }} " alt="photos">
</div>
<h2>{{ $post->title }}</h2>
<p>{{ $post->text }}</p>

@foreach($post->comments as $comment)
<div style="color: #a0aec0; ">
{{--    <p>{{  $comment->user->first_name  }}</p>--}}
    <p>{{ $comment->created_at}}</p>
    <p>{{ $comment->content  }}</p>

</div>
@endforeach

<form action="{{route('posts.comments.store', $post->id)}}" method="POST">
    @csrf
{{--    <input name="post_id" value="{{ $post->id }}" type="hidden">--}}
    <label for="content"></label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>

    <button type="submit">Send</button>
</form>

</body>
</html>
