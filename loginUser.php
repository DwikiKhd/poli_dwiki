    <!DOCTYPE html>
    <html>

    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Enhanced CSS -->
        <style>
            html {
                height: 100%;
            }

            body {
                font-family: 'Roboto', sans-serif;
                margin: 0;
                padding: 0;
                height: 100%;
                background-image: url('assets/images/bgloginpasien.png'); /* Path to your background image */
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .login-container {
                display: flex;
                width: 80%; /* Adjust as needed */
                max-width: 960px; /* Adjust as needed */
                background-color: rgba(255, 255, 255, 0.85); /* Semi-transparent white */
                border-radius: 12px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .left-container {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 50%; /* Image container takes up half the space */
            }

            .left-container img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .right-container {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 50%; /* Form container takes up the other half */
                padding: 40px;
            }

            .login-form {
                width: 100%;
                max-width: 350px;
            }

            .login-form h4 {
                font-weight: 700;
                color: #333;
                margin-bottom: 1rem;
            }

            .login-form input {
                width: 100%;
                padding: 15px;
                margin-bottom: 15px;
                border: 1px solid #dfe1e5;
                border-radius: 8px;
                background-color: #f8f9fa;
            }

            .login-form input:focus {
                border-color: #a4d7f5;
                box-shadow: 0 0 0 1px #a4d7f5;
            }

            .login-form button {
                width: 100%;
                padding: 15px;
                background-color: #007bff;
                color: #fff;
                font-weight: 700;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .login-form button:hover {
                background-color: #1da88a;
            }
            .login-form input,
            .login-form button {
                /* Other styles remain the same */
                margin-bottom: 30px; /* Increase spacing below the form elements */
            }

            /* To ensure the last element doesn't add extra space at the bottom, 
            you can remove the margin from the last child element */
            .login-form input:last-child,
            .login-form button:last-child {
                margin-bottom: 0;
            }

            .register-link {
            margin-top: 30px; /* Add more space above the registration link section */
            text-align: center;
            }    

            .register-link a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
            background-color: #007bff;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
            }

            .register-link a:hover {
                color: #1da88a; /* Adjust hover color as needed */
            background-color: #e0e0e0; /* Slightly darker background on hover */
            }

            

    @media (max-width: 600px) {
    
    }

        </style>
    </head>

    <body>
    <div class="login-container">
            <div class="left-container">
                <img src="assets/images/loginpasien1.jpg" alt="Login Image">
            </div>
            <div class="right-container">
                <div class="login-form">
                    <h4 class="text-center">Login Sebagai Pasien</h4>
                    <form action="pages/loginUser/checkLoginUser.php" method="post">
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <button type="submit" class="btn btn-block">
                            Login
                        </button>
                    </form>
                    <div class="register-link">
                        <p>Belum pernah mendaftar sebagai pasien?</p>
                        <a href="register.php">Registrasi dulu disini</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
