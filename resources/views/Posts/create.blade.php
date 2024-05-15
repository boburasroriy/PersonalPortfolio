<x-layouts.main>
    <x-slot:title>
        Create Post
        </x-slot>
        <link rel="stylesheet" href="{{ asset('css/posts/create.css') }}">


        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            <h2>Create a new post</h2>
            @csrf
            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div>
                <label for="category">Category:</label>
                <select name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="text">Text:</label>
                <textarea  style="font-family: Inter, serif" rows="15" cols="100" id="text" name="text" required></textarea>
            </div>

            <div>
                <label for="photo">Photo:</label>
                <input type="file" id="photo" name="photo" required>
            </div>

            <button type="submit">Create Post</button>
        </form>
</x-layouts.main>
