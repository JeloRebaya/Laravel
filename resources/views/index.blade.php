<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="hero">
        <div class="container hero-container">
            <div class="intro">
                <h1>Hello, I'm <span>Jelo Rebaya</span></h1>
                <p>I'm a 3rd YR BSCS Student</p>
                <a href="#projects" class="btn">View My Work</a>
            </div>

            <div class="image-placeholder">
                <img src="https://i.pinimg.com/474x/16/57/b5/1657b55d2e304e0c5e422216dc831dc0.jpg" alt="Profile Picture">
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
