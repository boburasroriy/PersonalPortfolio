<link rel="stylesheet" href="{{ asset('css/header.css') }}">
<header class="container">
    <h1> {{ $blog ?? 'THE BLOG' }}</h1>
    <a  class="abouttheauthor" href="{{ route('authorPage') }}">About the author</a>
</header>
