<x-layouts.main>
    <x-layouts.nav></x-layouts.nav>
    <x-layouts.header></x-layouts.header>

    <x-slot:title>
        My posts
        </x-slot>

        <div class="container">
            <link rel="stylesheet" href="{{ asset('css/posts/index.css') }}">
            <div  style="display: flex; justify-content: space-between">
                <h2>All blog posts</h2>
                @if(auth()->user() && (auth()->user()->role_id == 2 || auth()->user()->role_id == 3))
                    <a style="color: white; text-decoration: none; margin-top: 30px" href="{{route('posts.create')}}">
                        <button class="routeCreatePost">Create Post</button>
                    </a>
                @endif
            </div>
            <div class="post-grid"> <!-- Grid container for posts -->
                @foreach($posts as $post)
                    <div class="post"> <!-- Individual post item -->
                        <img src="{{ asset('/storage/' . $post->photo) }}" alt="{{ $post->title }}" class="post-image"> <!-- Added class for easier styling -->
                        <div class="post-info"> <!-- Container for post information -->
                            <a style="text-decoration:none; display: flex; gap: 25px; justify-content: space-between; font-size: 25px; " href="{{ route('posts.show', $post->id) }}">
                                <h3 class="post-title" style="text-decoration:none">{{ $post->title }}</h3>
                                <i  class="fa-solid fa-arrow-right fa-rotate-by" style="--fa-rotate-angle: 315deg; margin-top: 20px; color: blue;"></i>
                            </a>
                            <div class="post-text">
                                {{ Str::words($post->text, 20) }} <!-- Limit to 20 words -->
                            </div>
                            <div class="category_container">
                                <p class="post-category">{{$post->category->name }}</p> <!-- Display post category -->
                                <p class="post-date">{{ $post->created_at->format('M d, Y') }}</p> <!-- Display creation date -->

                                <!-- Like icon and count -->
                                <div style="display: flex; align-items: center; gap: 5px;">
                                    <i class="fas fa-heart" style="color: red;"></i>
                                    <span>{{ $post->likes_count }}</span>
                                </div>

                                <!-- Edit and Delete buttons -->
                                @if(auth()->user() && (auth()->user()->role_id == 2 || auth()->user()->role_id == 3))
                                    <div style="display: flex; gap: 5px">
                                        <a style="color: white; text-decoration: none; " href="{{route('posts.edit', $post->id)}}"><button class="routeEditPost">Edit</button></a>
                                        <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                            @csrf <!-- Include CSRF token -->
                                            @method('DELETE') <!-- Specify the HTTP method as DELETE -->
                                            <button type="submit" class="routeDeletePost">Delete</button> <!-- Button to submit the form -->
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $posts->links('vendor.pagination.bootstrap-4') }} <!-- Pagination -->
        </div>
        <script src="{{asset('js/posts/index.js')}}"></script>
</x-layouts.main>
