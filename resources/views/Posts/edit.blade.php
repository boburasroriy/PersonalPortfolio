<x-layouts.main>
    <x-slot:title>
        Edit Post {{$post->id}}
        </x-slot>
        <link rel="stylesheet" href="{{ asset('css/posts/edit.css') }}">

        <h2>Edit Post</h2>

<!-- Form for editing post -->
<form method="POST" action="{{ route('posts.update', ['post' => $post->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <img src="{{ asset('storage/' . $post->photo) }}" alt="Current Photo">
    <div>
        <label for="photo">New Photo:</label>
        <input type="file" id="photo" name="photo">
    </div>
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $post->title }}">
    </div>
    <div>
        <label for="text">Text:</label>
        <textarea id="text" name="text">{{ $post->text }}</textarea>
    </div>
    <button type="submit">Update Post</button>
</form>

</x-layouts.main>
