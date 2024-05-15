<link rel="stylesheet" href="{{ asset('css/nav.css') }}">
<nav class="navbar container">
    <a  style="text-decoration:none" href="{{route('home')}}">
        <div  class="logo">
            Your Name
        </div>
    </a>
    <div class="navbar-right">
        <button class="toggle-mode" id="toggle-theme-button"><i class="fas fa-sun"></i></button>
    @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ route('profile', auth()->user()->id) }}" class="login-link">{{ auth()->user()->first_name }}</a>
                @else
                    <a href="{{route('login')}}" class="login-link">Login</a>
                @endauth
            </div>
        @endif
    </div>
</nav>


