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

    <style>
        :root {
            --primary-color: #14a800;
            --secondary-color: #ffee66;
            --accent-color: #ffee66;
            --text-color: #333;
            --bg-color: #ffffff;
            --hero-text-color: #f0f0f0;
            --freelance-bg-color: #e6f7ff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: var(--freelance-bg-color);
            color: var(--text-color);
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .login-container {
            background-color: var(--bg-color);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-title {
            color: var(--primary-color);
            font-size: 28px;
            margin-bottom: 20px;
        }

        .login-form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            color: var(--text-color);
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 2px solid var(--freelance-bg-color);
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        .login-btn {
            background-color: var(--primary-color);
            color: var(--hero-text-color);
            border: none;
            border-radius: 5px;
            padding: 12px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.1s ease;
        }

        .login-btn:hover {
            background-color: #118f00;
        }

        .login-btn:active {
            transform: scale(0.98);
        }

        .forgot-password {
            margin-top: 15px;
            color: var(--primary-color);
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: #118f00;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-container {
            animation: fadeIn 0.5s ease-out;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
            }
        }
    </style>
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

        <div class="login-container">
            <h1 class="login-title">Welcome Back</h1>
            <form class="login-form">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="login-btn">Log In</button>
            </form>
            <a href="#" class="forgot-password">Forgot your password?</a>
        </div>
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
                };
            },
            methods: {
                newBooking() {
                    const formData = new FormData();
                    formData.append('name', this.form.name);

                    console.log('Données envoyées :', Object.fromEntries(formData));

                    axios.post('api/api.php?action=login', formData)
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