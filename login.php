<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tambahan CSS -->
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
    overflow: hidden;
}

.left-container {
    flex: 1;
    overflow: hidden;
}

.left-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.right-container {
    flex: 1;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 50%;
}

.login-form {
    width: 100%;
    max-width: 350px;
    margin-bottom: 30px; /* Add space below the form */
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


@media (max-width: 600px) {
    .login-container {
        width: 90%; /* Adjust the width for smaller screens */
        flex-direction: column; /* Stack the image and form on smaller screens */
    }

    .left-container,
    .right-container {
        width: 100%; /* Full width on smaller screens */
    }

    .right-container {
        padding: 20px; /* Adjust padding for smaller screens */
    }

    .footer {
        position: relative; /* Change footer positioning on smaller screens */
    }
}
.register-link {
            margin-top: 30px; /* Add more space above the registration link section */
            text-align: center;
            }    

            .register-link a {
                color: #24cfaa;
                text-decoration: none;
                transition: color 0.3s ease;
            }
            .register-link a:hover {
            color: #1da88a; /* Adjust hover color as needed */
            background-color: #e0e0e0; /* Slightly darker background on hover */
        }

    </style>
</head>

<body>
    <div class="login-container">
        <!-- Left container from first code snippet -->
        <div class="left-container">
            <img src="assets/images/logindokter.jpg" alt="Login Image">
        </div>
        <!-- Right container from first code snippet -->
        <div class="right-container">
            <div class="login-form">
                <h4 class="text-center">Login Sebagai Dokter</h4>
                <p class="login-box-msg text-center">Silahkan login sebagai <b class="text-success">Dokter</b> untuk melanjutkan</p>
                <br><br>
                <form action="pages/login/checkLogin.php" method="post">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <button type="submit" class="btn btn-block btn-success">
                        Login
                    </button>
                </form>
            </div>
            <div class="register-link">Login Sebagai <a href="loginUser.php"><span class="text-primary">Pasien</span></a>
            </div>
        </div>
    </div>

</body>

</html>
</script>
</body>

</html>