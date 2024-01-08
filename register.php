<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tambahan CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('assets/images/bgloginpasien.png'); /* Path to your background image */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #a6e9a6;
        }
        .content-wrapper {
    flex: 1 0 auto; /* The .content-wrapper will grow to fill the available space */
}

        .login-container {
            display: flex;
            max-width: 1200px;
            /* Ubah max-width sesuai kebutuhan */
            background-color: #fff;
            color: #186218;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
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
            justify-content: center;
            align-items: center;
            width: 50%; /* Form container takes up the other half */
            padding: 40px;
            /* Menambahkan padding untuk memperbesar area formulir */
        }

        .login-form {
            max-width: 400px;
            /* Sesuaikan dengan kebutuhan */   
            margin: 0 auto;
        }

        .login-form h2 {
            text-align: center;
            /* Tengahkan judul */
        }

        .login-form label {
            display: block;
            margin-bottom: 8px;
        }

        .login-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: none;
            /* Hapus border */
            border-bottom: 1px solid #ccc;
            /* Tambahkan garis bawah */
            outline: none;
            /* Hapus outline */
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
/* General styles */
html, body {
    height: 100%;
    margin: 0;
}

/* If the content is not enough to push the footer to the bottom, use this */
body {
    position: relative;
    min-height: 100%;
    padding-bottom: 70px; /* Height of the footer */
}


@media (max-width: 600px) {
    
}   

        .register-link {
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            color: #3498db;
            text-decoration: none;
        }
        @media (max-width: 600px) {
    
}
    </style>
</head>

<body>
<div class="content-wrapper">
    <div class="login-container">
        <div class="left-container">
            <img src="assets/images/regisbg.jpg" alt="Login Image">
        </div>
        <div class="right-container">
            <div class="login-form">
                <br><br><br>
                <h4 class="text-center">Register </h4>
                <p class="login-box-msg text-center">Daftarkan diri anda sebagai <span
                        class="text-primary">Pasien</span> </p>
                <form action="pages/register/checkRegister.php" method="post">
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" name="nama" required>

                    <label for="no_hp">Nomor KTP :</label>
                    <input type="number" class="form-control" name="no_ktp" required>

                    <label for="no_hp">Alamat :</label>
                    <input class="form-control" id="alamat" name="alamat" required></input>

                    <label for="no_hp">Password :</label>
                    <input type="password" class="form-control" name="password" required>

                    <label for="no_hp">Nomor Handphone :</label>
                    <input type="number" class="form-control" name="no_hp" required>

                    <button type="submit" class="btn btn-block btn-primary">
                        Register
                    </button>
                </form>

            </div>
            <div class="text-center mt-3">
                <p>- Belum punya akun pasien? -</p>
                <a href="loginUser.php" class="">
                    Login
                </a>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
</script>
</body>
</html>