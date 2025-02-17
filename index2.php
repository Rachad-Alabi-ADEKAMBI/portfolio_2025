<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Name - Freelance Web Developer Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #14A800;
            --secondary-color: #FFEE66;
            --accent-color: #FF6B6B;
            --text-color: #333;
            --bg-color: #ffffff;
            --hero-text-color: #f0f0f0;
            --freelance-bg-color: #E6F7FF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--bg-color);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        header {
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(5px);
        }

        nav {
            display: flex;
            justify-content: space-between;
            /* Change this from center to space-between */
            align-items: center;
            padding: 1rem 5%;
        }

        nav ul {
            display: flex;
            list-style-type: none;
            align-items: center;
            justify-content: center;
            /* Add this line */
            margin: 0 auto;
            /* Add this line */
        }

        nav ul li {
            margin: 0 1rem;
        }

        nav ul li a {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 600;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
        }

        nav ul li a i {
            margin-right: 0.5rem;
        }

        nav ul li a:hover,
        nav ul li a.active {
            color: var(--primary-color);
        }

        .book-appointment-btn {
            background-color: var(--primary-color);
            color: var(--bg-color);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .book-appointment-btn:hover {
            background-color: #118f00;
            transform: translateY(-3px);
        }

        .language-switch {
            display: flex;
            align-items: center;
            background-color: #f0f0f0;
            border-radius: 20px;
            overflow: hidden;
            margin-left: auto;
        }

        .language-option {
            padding: 0.3rem 0.7rem;
            cursor: pointer;
            font-size: 0.8rem;
            transition: background-color 0.3s ease;
        }

        .language-option.active {
            background-color: var(--primary-color);
            color: var(--bg-color);
        }

        #hero {
            background: linear-gradient(135deg, rgba(20, 168, 0, 0.8), rgba(255, 238, 102, 0.8)), url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            color: var(--hero-text-color);
            text-align: center;
            padding: 150px 0 100px;
            position: relative;
            overflow: hidden;
        }

        #hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease-out;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            font-weight: 700;
            color: #ffffff;
            /* Updated hero h1 color */
        }

        #hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto 2rem;
            animation: fadeInUp 1s ease-out 0.3s;
            animation-fill-mode: both;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            font-weight: 500;
            color: #f0f0f0;
            /* Updated hero p color */
        }

        .cta-button {
            display: inline-block;
            background-color: var(--secondary-color);
            color: var(--text-color);
            padding: 0.8rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.3s ease;
            animation: fadeInUp 1s ease-out 0.6s;
            animation-fill-mode: both;
        }

        .cta-button:hover {
            background-color: #FFD700;
            transform: translateY(-3px);
        }

        .floating-name {
            position: absolute;
            font-size: 2rem;
            font-weight: bold;
            opacity: 0.1;
            animation: floatName 20s linear infinite;
        }

        @keyframes floatName {
            0% {
                transform: translateX(-100%) translateY(0);
            }

            100% {
                transform: translateX(100vw) translateY(0);
            }
        }

        .main-techs {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 2rem;
        }

        .tech-icon {
            display: flex;
            flex-direction: column;
            align-items: center;
            animation: fadeInUp 1s ease-out 0.9s;
            animation-fill-mode: both;
        }

        .tech-icon i {
            font-size: 3rem;
            margin-bottom: 0.5rem;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 2rem;
        }

        #about,
        #freelance,
        #portfolio,
        #testimony,
        #appointment {
            padding: 60px 0;
        }

        #freelance {
            background-color: var(--freelance-bg-color);
        }

        .about-content,
        .freelance-content {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .about-image,
        .about-text {
            flex: 1;
        }

        .about-image img {
            max-width: 100%;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .about-image img:hover {
            transform: scale(1.05);
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 1rem;
        }

        .skill-icon {
            display: flex;
            flex-direction: column;
            align-items: center;
            animation: fadeInUp 1s ease-out;
            animation-fill-mode: both;
        }

        .skill-icon i {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            animation: bounce 2s infinite;
        }

        .freelance-content {
            flex-direction: column;
            align-items: center;
        }

        .freelance-cards {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 2rem;
        }

        .freelance-card {
            background-color: var(--bg-color);
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            text-align: center;
            width: 250px;
        }

        .freelance-card:hover {
            transform: translateY(-10px);
        }

        .freelance-card img {
            width: 100px;
            height: auto;
            margin-bottom: 1rem;
        }

        .freelance-card h3 {
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }

        .freelance-card p {
            font-size: 0.9rem;
            color: #666;
        }

        .freelance-stats {
            display: flex;
            justify-content: space-around;
            margin-top: 3rem;
            width: 100%;
        }

        .stat-item {
            text-align: center;
            background-color: var(--accent-color);
            color: var(--bg-color);
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .portfolio-item {
            background-color: var(--bg-color);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Updated transition */
        }

        .portfolio-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            /* Updated box-shadow */
        }

        .portfolio-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .portfolio-item-content {
            padding: 1.5rem;
        }

        .portfolio-item h3 {
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .portfolio-item-techs {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin: 1rem 0;
        }

        .portfolio-item-techs span {
            display: flex;
            align-items: center;
            background-color: var(--secondary-color);
            color: var(--text-color);
            padding: 0.2rem 0.5rem;
            border-radius: 20px;
            font-size: 0.8rem;
        }

        .portfolio-item-techs span i {
            margin-right: 0.3rem;
        }

        .portfolio-buttons {
            display: flex;
            gap: 1rem;
        }

        .view-project-btn,
        .view-github-btn {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .view-project-btn {
            background-color: var(--primary-color);
            color: var(--bg-color);
        }

        .view-github-btn {
            background-color: var(--text-color);
            color: var(--bg-color);
        }

        .view-project-btn:hover,
        .view-github-btn:hover {
            transform: translateY(-2px);
            /* Updated transform */
        }

        .view-project-btn i,
        .view-github-btn i {
            margin-right: 0.5rem;
        }

        .view-more-projects {
            text-align: center;
            margin-top: 2rem;
        }

        .view-more-projects-btn {
            display: inline-block;
            background-color: var(--primary-color);
            color: var(--bg-color);
            padding: 0.8rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .view-more-projects-btn:hover {
            background-color: #118f00;
            transform: translateY(-3px);
        }

        .testimony-slider {
            position: relative;
            overflow: hidden;
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
        }

        .testimony-container {
            display: flex;
            transition: transform 0.5s ease;
        }

        .testimony-item {
            flex: 0 0 100%;
            /* Updated flex property */
            padding: 2rem;
            background-color: var(--bg-color);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 0 1rem;
        }

        .testimony-content {
            font-style: italic;
            margin-bottom: 1rem;
        }

        .testimony-author {
            display: flex;
            align-items: center;
        }

        .testimony-author img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 1rem;
        }

        .appointment-form {
            background-color: var(--secondary-color);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        .date-time-selection {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
        }

        .date-time-slot {
            background-color: var(--bg-color);
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 0.5rem;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .date-time-slot:hover {
            background-color: var(--secondary-color);
        }

        .date-time-slot.selected {
            background-color: var(--primary-color);
            color: var(--bg-color);
        }

        .date-time-slot.unavailable {
            background-color: #f0f0f0;
            color: #999;
            cursor: not-allowed;
        }

        .submit-button {
            background-color: var(--primary-color);
            color: var(--bg-color);
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .submit-button:hover {
            background-color: #118f00;
            transform: translateY(-3px);
        }

        footer {
            background-color: var(--text-color);
            color: var(--bg-color);
            text-align: center;
            padding: 2rem 0;
        }

        .social-links {
            margin-top: 1rem;
        }

        .social-links a {
            color: var(--bg-color);
            text-decoration: none;
            margin: 0 0.5rem;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: var(--secondary-color);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes countUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                align-items: center;
            }

            nav ul {
                flex-direction: column;
                margin-right: 0;
                margin-bottom: 1rem;
            }

            nav ul li {
                margin: 0.5rem 0;
            }

            .language-switch {
                margin-left: 0;
            }

            .about-content,
            .freelance-content {
                flex-direction: column;
            }

            .portfolio-grid {
                grid-template-columns: 1fr;
            }

            .portfolio-item {
                margin-bottom: 2rem;
                /* Added margin-bottom for responsiveness */
            }

            .main-techs {
                flex-direction: column;
                align-items: center;
            }

            .tech-icon {
                margin-bottom: 1rem;
            }

            .date-time-selection {
                grid-template-columns: repeat(2, 1fr);
            }

            .freelance-cards {
                flex-direction: column;
                align-items: center;
            }

            .freelance-card {
                width: 100%;
                max-width: 300px;
            }

            .testimony-item {
                flex: 0 0 100%;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#about" class="nav-link"><i class="fas fa-user"></i> About</a></li>
                <li><a href="#freelance" class="nav-link"><i class="fas fa-laptop-code"></i> Freelance</a></li>
                <li><a href="#portfolio" class="nav-link"><i class="fas fa-briefcase"></i> Portfolio</a></li>
                <li><a href="#testimony" class="nav-link"><i class="fas fa-comments"></i> Testimony</a></li>
                <li><a href="#appointment" class="book-appointment-btn"><i class="fas fa-calendar-alt"></i> Book an Appointment</a></li>
            </ul>
            <div class="language-switch">
                <div class="language-option active" data-lang="en">EN</div>
                <div class="language-option" data-lang="fr">FR</div>
            </div>
        </nav>
    </header>

    <section id="hero">
        <div class="container">
            <h1>Hi, I'm <span style="color: var(--secondary-color);">[Your Name]</span></h1>
            <p>A passionate freelance web developer crafting beautiful and functional digital experiences.</p>
            <div class="main-techs">
                <div class="tech-icon">
                    <i class="fab fa-laravel"></i>
                    <span>Laravel</span>
                </div>
                <div class="tech-icon">
                    <i class="fab fa-vuejs"></i>
                    <span>Vue.js</span>
                </div>
                <div class="tech-icon">
                    <i class="fab fa-wordpress"></i>
                    <span>WordPress</span>
                </div>
            </div>
            <a href="#about" class="cta-button">Learn More</a>
        </div>
        <div class="floating-name" style="top: 20%; left: 0;">[Your Name]</div>
        <div class="floating-name" style="top: 60%; left: -50%;">[Your Name]</div>
        <div class="floating-name" style="top: 40%; left: -25%;">[Your Name]</div>
    </section>

    <section id="about">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1517849845537-4d257902454a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Your Name">
                </div>
                <div class="about-text">
                    <p>With over [X] years of experience in web development, I specialize in creating responsive, user-friendly websites and applications. My expertise spans across frontend and backend technologies, allowing me to deliver comprehensive solutions for my clients.</p>
                    <p>I'm passionate about staying up-to-date with the latest web technologies and best practices, ensuring that every project I work on is built with cutting-edge tools and techniques.</p>
                    <div class="skills">
                        <div class="skill-icon">
                            <i class="fab fa-js"></i>
                            <span>JavaScript</span>
                        </div>
                        <div class="skill-icon">
                            <i class="fab fa-html5"></i>
                            <span>HTML5</span>
                        </div>
                        <div class="skill-icon">
                            <i class="fab fa-css3-alt"></i>
                            <span>CSS3</span>
                        </div>
                        <div class="skill-icon">
                            <i class="fab fa-react"></i>
                            <span>React</span>
                        </div>
                        <div class="skill-icon">
                            <i class="fab fa-node-js"></i>
                            <span>Node.js</span>
                        </div>
                        <div class="skill-icon">
                            <i class="fab fa-python"></i>
                            <span>Python</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="freelance">
        <div class="container">
            <h2 class="section-title">Freelance Experience</h2>
            <div class="freelance-content">
                <div class="freelance-cards">
                    <div class="freelance-card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/d/d2/Upwork-logo.svg" alt="Upwork">
                        <h3>Upwork</h3>
                        <p>Top Rated Plus freelancer with 100% job success</p>
                    </div>
                    <div class="freelance-card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/3/3e/Fiverr_logo.svg" alt="Fiverr">
                        <h3>Fiverr</h3>
                        <p>Level Two seller with 5-star rating</p>
                    </div>
                </div>
                <div class="freelance-stats">
                    <div class="stat-item">
                        <div class="stat-number" data-target="70">0</div>
                        <p>Projects Completed</p>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="50">0</div>
                        <p>Satisfied Clients</p>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="3">0</div>
                        <p>Years of Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <h2 class="section-title">My Portfolio</h2>
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1557821552-17105176677c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="E-commerce Platform">
                    <div class="portfolio-item-content">
                        <h3>E-commerce Platform</h3>
                        <p>A full-stack e-commerce solution with real-time inventory management.</p>
                        <div class="portfolio-item-techs">
                            <span><i class="fab fa-laravel"></i> Laravel</span>
                            <span><i class="fab fa-vuejs"></i> Vue.js</span>
                            <span><i class="fas fa-database"></i> MySQL</span>
                        </div>
                        <div class="portfolio-buttons">
                            <a href="#" class="view-project-btn"><i class="fas fa-external-link-alt"></i> View Project</a>
                            <a href="#" class="view-github-btn"><i class="fab fa-github"></i> GitHub</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Social Media Dashboard">
                    <div class="portfolio-item-content">
                        <h3>Social Media Dashboard</h3>
                        <p>An analytics dashboard for social media managers with data visualization.</p>
                        <div class="portfolio-item-techs">
                            <span><i class="fab fa-react"></i> React</span>
                            <span><i class="fab fa-node-js"></i> Node.js</span>
                            <span><i class="fas fa-database"></i> MongoDB</span>
                        </div>
                        <div class="portfolio-buttons">
                            <a href="#" class="view-project-btn"><i class="fas fa-external-link-alt"></i> View Project</a>
                            <a href="#" class="view-github-btn"><i class="fab fa-github"></i> GitHub</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Mobile Fitness App">
                    <div class="portfolio-item-content">
                        <h3>Mobile Fitness App</h3>
                        <p>A cross-platform mobile app for tracking workouts and nutrition.</p>
                        <div class="portfolio-item-techs">
                            <span><i class="fab fa-react"></i> React Native</span>
                            <span><i class="fas fa-fire"></i> Firebase</span>
                            <span><i class="fas fa-code-branch"></i> Redux</span>
                        </div>
                        <div class="portfolio-buttons">
                            <a href="#" class="view-project-btn"><i class="fas fa-external-link-alt"></i> View Project</a>
                            <a href="#" class="view-github-btn"><i class="fab fa-github"></i> GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-more-projects">
                <a href="#" class="view-more-projects-btn">View More Projects</a>
            </div>
        </div>
    </section>

    <section id="testimony">
        <div class="container">
            <h2 class="section-title">What Clients Say</h2>
            <div class="testimony-slider">
                <div class="testimony-container">
                    <div class="testimony-item">
                        <p class="testimony-content">"Working with [Your Name] was a game-changer for our business. Their expertise in web development helped us create a stunning and functional website that exceeded our expectations."</p>
                        <div class="testimony-author">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Doe">
                            <div>
                                <h4>John Doe</h4>
                                <p>Tech Innovators Inc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimony-item">
                        <p class="testimony-content">"[Your Name] is a true professional. Their attention to detail and ability to translate our vision into reality was impressive. We couldn't be happier with the results."</p>
                        <div class="testimony-author">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Jane Smith">
                            <div>
                                <h4>Jane Smith</h4>
                                <p>Creative Solutions LLC</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimony-item">
                        <p class="testimony-content">"The e-commerce platform [Your Name] built for us has significantly increased our online sales. Their technical skills and business acumen are truly remarkable."</p>
                        <div class="testimony-author">
                            <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Mike Johnson">
                            <div>
                                <h4>Mike Johnson</h4>
                                <p>Global Retail Co.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimony-item">
                        <p class="testimony-content">"[Your Name] delivered our project on time and within budget. Their communication throughout the process was excellent, and they were always available to answer our questions."</p>
                        <div class="testimony-author">
                            <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="Sarah Lee">
                            <div>
                                <h4>Sarah Lee</h4>
                                <p>Innovative Startups Inc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimony-item">
                        <p class="testimony-content">"We were impressed by [Your Name]'s ability to quickly understand our complex requirements and deliver a solution that perfectly met our needs. They're a true problem-solver."</p>
                        <div class="testimony-author">
                            <img src="https://randomuser.me/api/portraits/men/56.jpg" alt="David Chen">
                            <div>
                                <h4>David Chen</h4>
                                <p>TechSolutions Co.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="appointment">
        <div class="container">
            <h2 class="section-title">Let's Connect</h2>
            <p class="appointment-intro">Ready to bring your web project to life? Let's schedule a meeting to discuss your ideas and how I can help you achieve your goals. Choose a convenient time slot below, and I'll be in touch to confirm our appointment.</p>
            <div class="appointment-form">
                <form>
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Select a Date and Time</label>
                        <p><i class="far fa-clock"></i> 20 minutes | Time Zone: Central European Time (CET) | Current time: <span id="current-time"></span></p>
                        <div class="date-time-selection">
                            <div class="date-time-slot unavailable">
                                <strong>16/02</strong><br>3:00 PM
                            </div>
                            <div class="date-time-slot unavailable">
                                <strong>16/02</strong><br>3:30 PM
                            </div>
                            <div class="date-time-slot unavailable">
                                <strong>16/02</strong><br>4:00 PM
                            </div>
                            <div class="date-time-slot">
                                <strong>16/02</strong><br>4:30 PM
                            </div>
                            <div class="date-time-slot">
                                <strong>16/02</strong><br>5:00 PM
                            </div>
                            <div class="date-time-slot">
                                <strong>17/02</strong><br>3:00 PM
                            </div>
                            <div class="date-time-slot">
                                <strong>17/02</strong><br>3:30 PM
                            </div>
                            <div class="date-time-slot">
                                <strong>17/02</strong><br>4:00 PM
                            </div>
                            <div class="date-time-slot">
                                <strong>18/02</strong><br>3:00 PM
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="project-details">Project Details</label>
                        <textarea id="project-details" name="project-details" rows="4" placeholder="Tell me about your project or any specific requirements"></textarea>
                    </div>
                    <button type="submit" class="submit-button">Schedule Meeting</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2023 [Your Name]. All rights reserved.</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="mailto:your.email@example.com"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
    </footer>

    <script>
        // Highlight active section in the menu
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= sectionTop - sectionHeight / 3) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').slice(1) === current) {
                    link.classList.add('active');
                }
            });
        });

        // Testimony slider
        const testimonyContainer = document.querySelector('.testimony-container');
        const testimonies = document.querySelectorAll('.testimony-item');
        let currentIndex = 0;

        function slideTestimonies() {
            currentIndex = (currentIndex + 1) % testimonies.length;
            testimonyContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        setInterval(slideTestimonies, 5000);

        // Date and time slot selection
        const dateTimeSlots = document.querySelectorAll('.date-time-slot:not(.unavailable)');
        dateTimeSlots.forEach(slot => {
            slot.addEventListener('click', () => {
                dateTimeSlots.forEach(s => s.classList.remove('selected'));
                slot.classList.add('selected');
            });
        });

        // Animated counter for freelance stats
        const counters = document.querySelectorAll('.stat-number');
        const speed = 200;

        function animateCounter(counter) {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const inc = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(() => animateCounter(counter), 1);
            } else {
                counter.innerText = target;
            }
        }

        function startCountAnimation() {
            counters.forEach(animateCounter);
        }

        // Intersection Observer for triggering counter animation
        const freelanceSection = document.querySelector('#freelance');
        const observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) {
                startCountAnimation();
                observer.unobserve(freelanceSection);
            }
        }, {
            threshold: 0.5
        });

        observer.observe(freelanceSection);

        // Language switch
        const languageOptions = document.querySelectorAll('.language-option');
        languageOptions.forEach(option => {
            option.addEventListener('click', () => {
                languageOptions.forEach(opt => opt.classList.remove('active'));
                option.classList.add('active');
                const lang = option.getAttribute('data-lang');
                // Implement language switch logic here
                console.log(`Switching to ${lang}`);
            });
        });

        // Current time display
        function updateCurrentTime() {
            const currentTimeElement = document.getElementById('current-time');
            const now = new Date();
            const options = {
                hour: '2-digit',
                minute: '2-digit',
                hour12: false,
                timeZone: 'Europe/Paris'
            };
            currentTimeElement.textContent = now.toLocaleTimeString('en-US', options);
        }

        updateCurrentTime();
        setInterval(updateCurrentTime, 60000); // Update every minute
    </script>
</body>

</html>