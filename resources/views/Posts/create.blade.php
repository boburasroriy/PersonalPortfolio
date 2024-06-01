<x-layouts.main>
    <x-slot:title>
        Create Post
        </x-slot>

        <link rel="stylesheet" href="{{ asset('css/posts/create.css') }}">
        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" onsubmit="prepareHighlightedContent()">
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
                <div contenteditable="true" class="contenteditable-div" id="Article"></div>
                <textarea id="hiddenTextarea" name="text" class="form-control" style="display:none;"></textarea>
            </div>
            <div>
                <button type="button" onclick="highlightSelectedText()">Highlight Selected Text</button>
            </div>

            <div>
                <label for="photo">Photo:</label>
                <input type="file" id="photo" name="photo" required>
            </div>

            <button type="submit">Create Post</button>
        </form>

        <h2>Preview</h2>
        <div id="preview" style="border:1px solid #ccc; padding: 10px; width: 80%;"></div>


        <script src="{{ asset('js/posts/create.js') }}"></script>
</x-layouts.main>
