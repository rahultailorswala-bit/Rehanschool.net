<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body {
            background-color: #f4f4f9;
            color: #333;
        }
        header {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            padding: 1rem;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: auto;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            font-size: 1.1rem;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #ffd700;
        }
        .hero {
            text-align: center;
            padding: 4rem 1rem;
            background: url('https://source.unsplash.com/random/1600x900/?education') no-repeat center/cover;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .features, .stats, .testimonials, .articles {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 1rem;
        }
        .features h2, .stats h2, .testimonials h2, .articles h2 {
            text-align: center;
            margin-bottom: 2rem;
            color: #1e3c72;
        }
        .feature-grid, .stats-grid, .testimonial-grid, .article-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }
        .feature-card, .stat-card, .testimonial-card, .article-card {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s;
        }
        .feature-card:hover, .stat-card:hover, .testimonial-card:hover, .article-card:hover {
            transform: translateY(-5px);
        }
        footer {
            background: #1e3c72;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
        }
        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                gap: 1rem;
            }
            .hero h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">Rehan School</div>
            <div>
                <a href="index.html">Home</a>
                <a href="curriculum.html">Curriculum</a>
                <a href="facilitators.html">Facilitators</a>
                <a href="contact.html">Contact</a>
            </div>
        </nav>
    </header>
    <section class="hero">
        <h1>Empowering Future Leaders with AI-Enabled Education</h1>
        <p>Rehan School: Where Innovation Meets Holistic Development</p>
    </section>
    <section class="features">
        <h2>Our Unique Features</h2>
        <div class="feature-grid">
            <div class="feature-card">
                <h3>AI-Enabled Education</h3>
                <p>Leveraging AI to personalize learning and enhance skills.</p>
            </div>
            <div class="feature-card">
                <h3>Holistic Development</h3>
                <p>Fostering creativity, critical thinking, and emotional intelligence.</p>
            </div>
            <div class="feature-card">
                <h3>Entrepreneurial Focus</h3>
                <p>Equipping students with skills to innovate and lead.</p>
            </div>
        </div>
    </section>
    <section class="stats">
        <h2>Our Impact</h2>
        <div class="stats-grid">
            <div class="stat-card">
                <h3>50+</h3>
                <p>Team Members</p>
            </div>
            <div class="stat-card">
                <h3>1000+</h3>
                <p>Students</p>
            </div>
            <div class="stat-card">
                <h3>5</h3>
                <p>Campuses</p>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <h2>What Our Community Says</h2>
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <p>"Rehan School transformed my child's learning experience!"</p>
                <p>- Parent</p>
            </div>
            <div class="testimonial-card">
                <p>"The entrepreneurial focus is inspiring and practical."</p>
                <p>- Student</p>
            </div>
        </div>
    </section>
    <section class="articles">
        <h2>Latest Articles</h2>
        <div class="article-grid">
            <div class="article-card">
                <h3>New AI Lab Opened</h3>
                <p>Our latest campus features a state-of-the-art AI lab.</p>
            </div>
            <div class="article-card">
                <h3>Student Startup Success</h3>
                <p>Our students launched a successful app in 2025.</p>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2025 Rehan School. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
