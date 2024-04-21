<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
        }

        nav a:hover {
            background-color: #666;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
            overflow: hidden;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card img {
            width: 100%;
            border-radius: 5px;
        }

        .card h2 {
            margin-top: 10px;
        }

        .card p {
            margin-top: 10px;
            line-height: 1.6;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>
<body>
<header>
    <h1>My Portfolio</h1>
</header>
<nav>
    <a href="#about">About</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact</a>
</nav>
<div class="container">
    <section id="about" class="card">
        <h2>About Me</h2>

        <p>dfsfs</p>

    </section>
    <section id="projects" class="card">
        <h2>Projects</h2>
        <div class="project">
            <img src="project1.jpg" alt="Project 1">
            <h3>Project 1</h3>
            <p>Description of Project 1</p>
        </div>
        <div class="project">
            <img src="project2.jpg" alt="Project 2">
            <h3>Project 2</h3>
            <p>Description of Project 2</p>
        </div>
    </section>
    <section id="contact" class="card">
        <h2>Contact Me</h2>
        <p>Email: example@example.com</p>
        <p>Phone: 123-456-7890</p>
    </section>
</div>
<footer>
    &copy; 2024 My Portfolio
</footer>
</body>
</html>
@if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
            <a href="{{ route('profile', auth()->user()->id) }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ auth()->user()->first_name }}</a>
        @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        @endauth
    </div>
@endif

