<x-layouts.main>
    <x-slot:title>
        Post
        </x-slot>

        <x-layouts.nav></x-layouts.nav>
        <style>
            .highlight {
                background-color: #F8FF00;
                color: black;
            }
        </style>
        <link rel="stylesheet" href="{{ asset('css/posts/show.css') }}">

        <div class="post-content">
            <!-- Post image -->
            <div class="post-image">
                <img src="{{ asset('/storage/' . $post->photo) }}" alt="{{ $post->title }}">
            </div>

            <!-- Post information -->
            <div class="post-info">
                <p style="color: purple"> Post created: {{ $post->created_at->format('M d, Y')}} </p>
                <p style="color: #C0C5D0; margin-top: -10px ; font-size: 15px">  category: {{ $post->category->name }}</p>
                <h2 class="post-title">{{ $post->title }}</h2>
                <div class="post-text">
                    {!! nl2br($post->text) !!}
                </div>
            </div>

            <!-- Comments section -->
            <div class="comments-section">
                @foreach($post->comments as $comment)
                    <div class="comment">
                        <p><strong>{{ $comment->user->first_name . ' ' . $comment->user->last_name }}</strong> commented at {{ $comment->created_at->diffForHumans() }}</p>
                        <p>{{ $comment->content }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Comment form -->
            <form class="comment-form" action="{{ route('posts.comments.store', $post->id) }}" method="POST">
                @csrf
                <label for="content">Leave a comment:</label>
                <textarea style="font-family: Inter, serif" name="content" id="content" cols="30" rows="5"></textarea>

                <button type="submit">Send</button>
            </form>
        </div>



</x-layouts.main>
