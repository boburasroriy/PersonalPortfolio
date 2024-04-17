<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
<p>Create a new post</p>
<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
    </div>
    <div>
        <label for="text">Text:</label>
        <textarea id="text" name="text" required></textarea>
    </div>
    <div>
        <label for="photo">Photo:</label>
        <input type="file" id="photo" name="photo" required>
    </div>
    <button type="submit">Create Post</button>
</form>

</body>
</html>
