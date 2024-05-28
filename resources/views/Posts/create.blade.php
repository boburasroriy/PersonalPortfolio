<x-layouts.main>
    <x-slot:title>
        Create Post
        </x-slot>

        <link rel="stylesheet" href="{{ asset('css/posts/create.css') }}">
        <script>
            tinymce.init({
                selector: '#text',
                plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                toolbar_mode: 'floating',
                height: 400
            });
        </script>
        <style>
            .highlight {
                background-color: yellow;
            }
        </style>

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
                <textarea  style="font-family: Inter, serif" rows="15" cols="100" id="text" name="text" required></textarea>
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

        <script>
            function highlightSelectedText() {
                const textarea = document.getElementById('text');
                const preview = document.getElementById('preview');
                const start = textarea.selectionStart;
                const end = textarea.selectionEnd;

                if (start === end) {
                    return;
                }

                const originalText = textarea.value;
                const selectedText = originalText.substring(start, end);
                const highlightedText = `<span class="highlight">${selectedText}</span>`;
                const highlightedContent = originalText.substring(0, start) + highlightedText + originalText.substring(end);

                textarea.value = highlightedContent;
                preview.innerHTML = highlightedContent;
            }

            function prepareHighlightedContent() {
                const textarea = document.getElementById('text');
                const preview = document.getElementById('preview');
                textarea.value = preview.innerHTML;
            }
        </script>
</x-layouts.main>
