<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-header h1 {
            margin-top: 10px;
        }

        .profile-details {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .profile-details ul {
            list-style: none;
            padding: 0;
        }

        .profile-details li {
            margin-bottom: 10px;
        }

        .profile-details label {
            font-weight: bold;
        }

        .profile-details span {
            margin-left: 10px;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container a {
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button-container a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="profile-header">
        <h1 nam> {{ $user->first_name }}</h1>
    </div>
    <div class="profile-details">
        <ul>
            <li>
                <label>Email:</label>
                <span > {{ $user->first_name }}</span>
            </li>
            <li>
                <label>Location:</label>
                <span>New York, USA</span>
            </li>
            <li>
                <label>Occupation:</label>
                <span>Web Developer</span>
            </li>
            <li>
                <label>Interests:</label>
                <span>Programming, Reading, Traveling</span>
            </li>
        </ul>
    </div>
    <div class="button-container">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</div>

</body>
</html>

