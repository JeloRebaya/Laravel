<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

    <div class="sidebar">
        <h2>Admin</h2>
        <a href="#">Dashboard</a>
        <a href="#">Profile</a>
        <a href="#">Projects</a>
        <a href="#">Skills</a>
        <a href="#">Messages</a>
        <a href="#">Settings</a>

        <!-- Logout (POST request) -->
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="sidebar-logout">
                Logout
            </button>
        </form>
    </div>

    <div class="main">
        <h1>Dashboard</h1>

        <div class="card">
            <h3>Welcome!</h3>
            <p>This is my portfolio admin panel.</p>
        </div>

        <div class="card">
            <h3>Quick Info</h3>
            <ul>
                <li>Total Projects: 2</li>
                <li>Total Skills: 2</li>
            </ul>
        </div>
    </div>

</body>
</html>
