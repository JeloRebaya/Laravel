<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <img src="{{ asset('images/logo.png')}}" class="nav-logo" alt="logo">
            </div>

            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>   
    </nav>

    <header class="hero">
        <div class="container hero-container">
            <div class="intro">
                <h1 class="fade-in">Hello, I'm <span>Jelo Rebaya</span></h1>
                <p>I'm a 3rd YR BSCS Student</p>
                <a href="#projects" class="btn">View My Work</a>
                <a href="{{ route('admin.dashboard') }}" class="btn admin-btn">Go to Admin Panel</a>
            </div>

            <div class="image-placeholder">
                <img src="{{ asset('images/profile.jpg')}}" alt="Profile Picture">
            </div>
        </div>
    </header>

    <section id="about" class="section">
        <div class="container">
            <h2>About Me</h2>
            <p>
                Idol ko si Spiderman.
            </p>
        </div>
    </section>

    <section id="contact" class="section">
        <div class="container">
            <h2>Contact Me</h2>
            <p>You can reach me at <a href="mailto:jrebaya23-0150@cca.edu.ph">jrebaya23-0150@cca.edu.ph</a></p>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Jelo Rebaya. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
