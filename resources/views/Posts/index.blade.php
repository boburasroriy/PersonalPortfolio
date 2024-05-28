<x-layouts.main>
    <x-layouts.nav></x-layouts.nav>
    <x-layouts.header></x-layouts.header>

    <x-slot:title>
        My posts
        </x-slot>

        <div class="container">
            <link rel="stylesheet" href="{{ asset('css/posts/index.css') }}">
            <div style="display: flex; justify-content: space-between">
                <h2>All blog posts</h2>
                @if(auth()->user() && (auth()->user()->role_id == 2 || auth()->user()->role_id == 3))
                    <a style="color: white; text-decoration: none; margin-top: 30px" href="{{ route('posts.create') }}">
                        <button class="routeCreatePost">Create Post</button>
                    </a>
                @endif
            </div>
            <form action="{{ route('categories.filter') }}" method="POST">
                @csrf
                <label class="categories" for="category-select">Categories</label>
                <select name="category_id" id="category-select" onchange="this.form.submit()" class="custom-select">
                    <option value="">All Posts</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $selectedCategoryId ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </form>
            <div class="post-grid">
                @foreach($posts as $post)
                    <div class="post">
                        <img src="{{ asset('/storage/' . $post->photo) }}" alt="{{ $post->title }}" class="post-image">
                        <div class="post-info">
                            <a style="text-decoration:none; display: flex; gap: 25px; justify-content: space-between; font-size: 25px;" href="{{ route('posts.show', $post->id) }}">
                                <h3 class="post-title" style="text-decoration:none">{{ $post->title }}</h3>
                                <i class="fa-solid fa-arrow-right fa-rotate-by" style="--fa-rotate-angle: 315deg; margin-top: 20px; color: blue;"></i>
                            </a>
                            <div class="post-text">
                                {!! Str::words($post->text, 20) !!}
                            </div>
                            <div class="category_container">
                                <p class="post-category">{{ $post->category->name }}</p>

                                <p class="post-date">{{ $post->created_at->diffForHumans() }}</p>
                                @if(auth()->user() && (auth()->user()->role_id == 2 || auth()->user()->role_id == 3))
                                    <div style="display: flex; gap: 5px">
                                        <a style="color: white; text-decoration: none;" href="{{ route('posts.edit', $post->id) }}"><button class="routeEditPost">Edit</button></a>
                                        <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="routeDeletePost">Delete</button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div style="margin-top: 100px">
                {{ $posts->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
        <script src="{{ asset('js/posts/index.js') }}"></script>
</x-layouts.main>
<x-layouts.footer></x-layouts.footer>
