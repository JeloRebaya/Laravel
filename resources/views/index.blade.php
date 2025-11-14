<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    
    <!-- Link to your single CSS file -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Header / Hero Section -->
    <header class="hero">
        <div class="container">
            <h1>Hello, I'm <span>Jelo Rebaya</span></h1>
            <p>I'm a 3rd YR BSCS Student</p>
            <a href="#projects" class="btn">View My Work</a>
        </div>
    </header>

    <!-- About Me Section -->
    <section id="about" class="section">
        <div class="container">
            <h2>About Me</h2>
            <p>
				Idol ko si Spiderman.
            </p>
        </div>
    </section>

    <!-- Projects / Portfolio Section -->
    <section id="projects" class="section">
        <div class="container">
            <h2>My Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <img src="{{ asset('images/project1.jpg') }}" alt="Project 1">
                    <h3>Project 1</h3>
                    <p>Short description of the project.</p>
                </div>
                <div class="project-card">
                    <img src="{{ asset('images/project2.jpg') }}" alt="Project 2">
                    <h3>Project 2</h3>
                    <p>Short description of the project.</p>
                </div>
                <div class="project-card">
                    <img src="{{ asset('images/project3.jpg') }}" alt="Project 3">
                    <h3>Project 3</h3>
                    <p>Short description of the project.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <h2>Contact Me</h2>
            <p>You can reach me at <a href="mailto:your.email@example.com">jrebaya23-0150@cca.edu.ph</a></p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Your Name. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
