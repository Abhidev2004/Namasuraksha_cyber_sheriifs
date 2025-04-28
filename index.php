<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namma Suraksha</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">Namma Suraksha</div>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="crime_reporting.html">Report Crime</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Register</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Namma Suraksha</h1>
            <p>Your safety is our priority.  We are committed to serving and protecting our community.</p>
            <a href="crime_reporting.html" class="report-button">Report a Crime</a>
        </div>
    </section>

    <section class="features">
        <div class="feature-card">
            <img src="https://img.freepik.com/free-vector/flat-design-people-analyzing-crime_23-2149187285.jpg?size=626&ext=jpg&ga=GA1.1.1880302027.1714320000&semt=ais" alt="Crime Reporting">
            <h3>Easy Crime Reporting</h3>
            <p>Report crimes quickly and easily through our online portal.</p>
        </div>
        <div class="feature-card">
            <img src="https://img.freepik.com/free-vector/data-analysis-concept_52683-25320.jpg?size=626&ext=jpg&ga=GA1.1.1880302027.1714320000&semt=ais" alt="Data Accuracy">
            <h3>Data Accuracy</h3>
            <p>Ensuring accuracy and completeness in crime data for better analysis.</p>
        </div>
        <div class="feature-card">
             <img src="https://img.freepik.com/free-vector/police-officer-character_23-2147511030.jpg?size=626&ext=jpg&ga=GA1.1.1880302027.1714320000&semt=ais" alt="Community Support">
            <h3>Community Support</h3>
            <p>Working together with the community to maintain law and order.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Namma Suraksha. All rights reserved.</p>
    </footer>

    <script>
        
        document.addEventListener('DOMContentLoaded', function() {
            const heroContent = document.querySelector('.hero-content');
            heroContent.style.opacity = 0;
            heroContent.style.transform = 'translateY(20px)';
            setTimeout(() => {
                heroContent.style.opacity = 1;
                heroContent.style.transform = 'translateY(0)';
                heroContent.style.transition = 'opacity 1s ease, transform 1s ease';
            }, 500);
        });
    </script>
</body>
</html>