<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rachad Alabi ADEKAMBI - Freelance Web Developer Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <meta name="description" content="Rachad Alabi ADEKAMBI is a freelance web developer specializing in full-stack development. With over 6 years of experience, Rachad crafts beautiful and functional digital experiences for clients worldwide.">
    <meta name="robot" content="index. follow">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>

    <div class="app" id="app">
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
                <h1>Hi, I'm <span style="color: var(--secondary-color);">Rachad</span></h1>
                <p class="fw-bold" style="font-weight: 900;">your future Full Stack developer</p>
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
                </div> <br>
                <a href="#about" class="cta-button mt-3 fw-bold">Learn More</a>
            </div>
            <div class="floating-name" style="top: 20%; left: 0;">Rachad ALabi</div>
            <div class="floating-name" style="top: 60%; left: -50%;">Full Stack Developer</div>
        </section>

        <section id="about">
            <div class="container">
                <h2 class="section-title">About Me</h2>
                <div class="about-content">
                    <div class="about-image">
                        <img src="https://images.unsplash.com/photo-1517849845537-4d257902454a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=40" alt="Rachad Alabi ADEKAMBI web developer">
                    </div>
                    <div class="about-text">
                        <p>With over <strong>6 years</strong> of experience in web development, I specialize in creating responsive, user-friendly websites and applications. My expertise spans across frontend and backend
                            technologies, allowing me to deliver comprehensive solutions for my clients.</p> <br>
                        <p>I'm passionate about staying up-to-date with the latest web technologies and best practices, ensuring that every project I work on is built with cutting-edge tools and techniques.</p>
                        <div class="skills">
                            <div class="skill-icon">
                                <i class="fab fa-html5"></i>
                                <span>HTML5</span>
                            </div>
                            <div class="skill-icon">
                                <i class="fab fa-css3-alt"></i>
                                <span>CSS3</span>
                            </div>
                            <div class="skill-icon">
                                <i class="fab fa-js"></i>
                                <span>JavaScript</span>
                            </div>
                            <div class="skill-icon">
                                <i class="fab fa-php"></i>
                                <span>PHP</span>
                            </div>
                            <div class="skill-icon">
                                <i class="fas fa-database"></i>
                                <span>MYSQL</span>
                            </div>
                            <div class="skill-icon">
                                <i class="fab fa-python"></i>
                                <span>Python</span>
                            </div>
                            <div class="skill-icon">
                                <i class="fab fa-vuejs"></i>
                                <span>VueJS</span>
                            </div>
                            <div class="skill-icon">
                                <i class="fab fa-laravel"></i>
                                <span>Laravel</span>
                            </div>

                            <div class="skill-icon">
                                <i class="fas fa-flask"></i>
                                <span>Flask</span>
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
                            <img src="https://upload.wikimedia.org/wikipedia/commons/d/d2/Upwork-logo.svg" alt="Upwork freelance">
                            <p>Top Rated Plus freelancer with 100% job success</p>
                        </div>
                        <div class="freelance-card">
                            <img src="public/images/come_up.jpg" alt="freelance comeup">
                            <p>Top Rated Plus freelancer with 100% job success</p>
                        </div>
                    </div>
                    <div class="freelance-stats">
                        <div class="stat-item">
                            <div class="stat-number" data-target="+80">0</div>
                            <p>Projects Completed</p>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-target="50">0</div>
                            <p>Satisfied Clients</p>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number" data-target="6">0</div>
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
                    <div v-for="(project, index) in projects" :key="index" class="portfolio-item">
                        <img :src="project.image" :alt="project.name">
                        <div class="portfolio-item-content">
                            <h3>{{ project.name }}</h3>
                            <p>{{ project.description }}</p>
                            <div class="portfolio-item-techs">
                                <span v-for="(tech, techIndex) in project.techs" :key="techIndex">
                                    <i :class="tech.icon"></i> {{ tech.name }}
                                </span>
                            </div>
                            <div class="portfolio-buttons">
                                <a :href="project.links.view" class="view-project-btn">
                                    <i class="fas fa-external-link-alt"></i> View Project
                                </a>
                                <a v-if="project.links.github" :href="project.links.github" class="view-github-btn">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
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
                            <p class="testimony-content">"Working with Rachad was a game-changer for our business. Their expertise in web development helped us create a stunning and functional website that exceeded our expectations."</p>
                            <div class="testimony-author">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Doe">
                                <div>
                                    <h4>John Doe</h4>
                                    <p>Tech Innovators Inc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimony-item">
                            <p class="testimony-content">"Rachad is a true professional. Their attention to detail and ability to translate our vision into reality was impressive. We couldn't be happier with the results."</p>
                            <div class="testimony-author">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Jane Smith">
                                <div>
                                    <h4>Jane Smith</h4>
                                    <p>Creative Solutions LLC</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimony-item">
                            <p class="testimony-content">"The e-commerce platform Rachad built for us has significantly increased our online sales. Their technical skills and business acumen are truly remarkable."</p>
                            <div class="testimony-author">
                                <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Mike Johnson">
                                <div>
                                    <h4>Mike Johnson</h4>
                                    <p>Global Retail Co.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimony-item">
                            <p class="testimony-content">"Rachad delivered our project on time and within budget. Their communication throughout the process was excellent, and they were always available to answer our questions."</p>
                            <div class="testimony-author">
                                <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="Sarah Lee">
                                <div>
                                    <h4>Sarah Lee</h4>
                                    <p>Innovative Startups Inc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimony-item">
                            <p class="testimony-content">"We were impressed by Rachad's ability to quickly understand our complex requirements and deliver a solution that perfectly met our needs. They're a true problem-solver."</p>
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
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="form-group mt-1">
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
                <p>&copy; 2025 Rachad Alabi ADEKAMBI. All rights reserved.</p>
                <div class="social-links">
                    <a href="https://www.linkedin.com/in/rachad-alabi-adekambi-2753a21b5/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/Rachad-Alabi-ADEKAMBI"><i class="fab fa-github"></i></a>
                    <a href="adekambirachad@gmail.com"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </footer>
    </div>


    <script>
        const {
            createApp
        } = Vue;

        createApp({
            data() {
                return {
                    skills: [],
                    message: '',
                    menuActive: false, // Etat pour le menu hamburger
                    selectedLanguage: 'en', // Langue sélectionnée par défaut
                    languages: ['en', 'fr'], // Liste des langues disponibles
                    projects: [{
                            name: 'Job Tracker',
                            description: 'A full-stack web solution to track your job application.',
                            techs: [{
                                    name: 'Laravel',
                                    icon: 'fab fa-laravel'
                                },
                                {
                                    name: 'Vue.js',
                                    icon: 'fab fa-vuejs'
                                },
                                {
                                    name: 'MySQL',
                                    icon: 'fas fa-database'
                                }
                            ],
                            image: 'https://images.unsplash.com/photo-1557821552-17105176677c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
                            links: {
                                view: '#',
                                github: '#'
                            }
                        },
                        {
                            name: 'Social Media Dashboard',
                            description: 'An analytics dashboard for social media managers with data visualization.',
                            techs: [{
                                    name: 'React',
                                    icon: 'fab fa-react'
                                },
                                {
                                    name: 'Node.js',
                                    icon: 'fab fa-node-js'
                                },
                                {
                                    name: 'MongoDB',
                                    icon: 'fas fa-database'
                                }
                            ],
                            image: 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
                            links: {
                                view: '#',
                                github: '#'
                            }
                        },
                        {
                            name: 'Mobile Fitness App',
                            description: 'A cross-platform mobile app for tracking workouts and nutrition.',
                            techs: [{
                                    name: 'React Native',
                                    icon: 'fab fa-react'
                                },
                                {
                                    name: 'Firebase',
                                    icon: 'fas fa-fire'
                                },
                                {
                                    name: 'Redux',
                                    icon: 'fas fa-code-branch'
                                }
                            ],
                            image: 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80',
                            links: {
                                view: '#',
                                github: '' // No GitHub link for this project
                            }
                        }
                    ]
                };
            },
            mounted() {
                this.displayHome();

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
            },
            methods: {
                displayHome() {
                    //  alert('ok');
                },
                newBooking() {
                    const formData = new FormData();
                    formData.append('company', this.form.company);

                    console.log('Données envoyées :', Object.fromEntries(formData));

                    axios.post('index.php?action=addNewJob', formData)
                        .then(response => {
                            console.log('Réponse Axios :', response.data);
                            if (response.data.success) {
                                this.message = response.data.message;
                                this.displayJobs();
                            } else {
                                this.message = response.data.message;
                            }
                        })
                        .catch(error => {
                            console.error('Erreur Axios :', error);
                            this.message = 'Erreur lors de la connexion.';
                        });
                },

            }
        }).mount('#app');
    </script>

</body>

</html>