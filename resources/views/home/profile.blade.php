<x-layouts.main>
    <x-layouts.nav></x-layouts.nav>

    <x-slot:title>
        Profile
    </x-slot:title>


    <!-- Include the CSS for Profile -->
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">

    <div class="container">
        <!-- Profile header -->
        <div class="profile-header">
            <h1>{{ $user->first_name }}</h1>
        </div>

        <!-- Profile details -->
        <div class="profile-details">
            <ul>
                <li>
                    <label>Last Name:</label>
                    <span>{{ $user->last_name}}</span>
                </li>
                <li>
                    <label>Email:</label>
                    <span>{{ $user->email }}</span>
                </li>
                <li>
                    <label>Role:</label>
                    <span>{{ $user->role->name}}</span>
                </li>
            </ul>
        </div>


        <!-- Logout button -->
        <div class="button-container">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
</x-layouts.main>
