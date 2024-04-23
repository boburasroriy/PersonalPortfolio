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
         <script>
             function toggleLike(postId) {
                 const likeIcon = document.getElementById(`like-icon-${postId}`);
                 const likeCount = likeIcon.querySelector('.like-count');
                 const isLiked = likeIcon.classList.contains('liked');

                 if (isLiked) {
                     // Send unlike request
                     fetch(document.getElementById(`unlike-form-${postId}`).action, {
                         method: 'POST',
                         headers: {
                             'X-CSRF-TOKEN': '{{ csrf_token() }}',
                             'X-HTTP-Method-Override': 'DELETE'
                         }
                     })
                         .then(response => response.json())
                         .then(data => {
                             if (data.likes_count !== undefined) {
                                 likeCount.textContent = data.likes_count;
                                 likeIcon.classList.remove('liked');
                             }
                         });
                 } else {
                     fetch(document.getElementById(`like-form-${postId}`).action, {
                         method: 'POST',
                         headers: {
                             'X-CSRF-TOKEN': '{{ csrf_token() }}'
                         }
                     })
                         .then(response => response.json())
                         .then(data => {
                             if (data.likes_count !== undefined) {
                                 likeCount.textContent = data.likes_count;
                                 likeIcon.classList.add('liked'); // Add the 'liked' class
                             }
                         });
                 }
             }
         </script>
         <span class="like-icon" id="like-icon-{{ $post->id }}">
            <span class="like-count">{{ $post->likes->count() }}</span>
        </span>
         <form id="like-form-{{ $post->id }}" action="{{ route('posts.like', ['postId' => $post->id]) }}" method="POST">
             @csrf
         </form>
         <form id="unlike-form-{{ $post->id }}" action="{{ route('posts.unlike', ['postId' => $post->id]) }}" method="POST">
             @csrf
             @method('DELETE')
         </form>
         <button onclick="toggleLike({{ $post->id }})">Like</button>

@endforeach
<div style="display: flex; justify-content: center; text-decoration: none">
    <p style="text-decoration: none">
        {{ $posts->links('vendor.pagination.bootstrap-4') }}
    </p>
</div>
</body>
</html>



