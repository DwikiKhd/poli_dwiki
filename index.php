<!DOCTYPE html>
<html lang="en">

<style>
/* Body styles */
body {
    font-family: 'Source Sans Pro', sans-serif;
    margin: 0;
    padding: 0;
}

/* Header styles */
.container-fluid {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    height: 400px;
    background-color: #232ed1;
    color: white;
}

/* Heading styles */
h1 {
    font-weight: bold;
    margin-bottom: 10px;
    font-size: 36px;
}

/* Card styles */
.card {
    margin-top: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease-in-out;
}

.card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.card-body {
    text-align: center;
}

.card i {
    font-size: 34px;
}

.card h3 {
    margin-top: 10px;
    margin-bottom: 15px;
    font-size: 24px;
}

.card p {
    color: #555;
}

/* Testimonial section styles */
.client_section {
    background: #f9f9f9;
    padding: 60px 0;
}

.heading_center {
    text-align: center;
    margin-bottom: 40px;
}

.testimonial-card {
    margin-bottom: 30px;
}

.testimonial-card .card {
    border: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease-in-out;
}

.testimonial-card .card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.img-box img {
    width: 100%;
    border-radius: 50%;
}

.text-content {
    padding: 20px;
    text-align: center;
}

.text-content h6 {
    margin-top: 10px;
    margin-bottom: 5px;
    font-size: 20px;
}

.text-content p {
    color: #777;
    margin-bottom: 5px;
}

.testimonial-text {
    font-style: italic;
    color: #555;
}
* Testimonial section styles */
.testimonial-card .card {
    border: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease-in-out;
    width: 100%;
}

.testimonial-card .card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.img-box img {
    width: 200px;
    border-radius: 50%;
    max-width: 100%;
}

.text-content {
    flex: 1;
    padding: 20px;
    text-align: left;
}
/* Heading styles */
.client_section .heading_container h2 {
    background-color: #CDBD00;
    padding: 10px 20px;
    border-radius: 8px;
    margin-bottom: 10px;
    display: inline-block;
    color: white; /* Warna teks putih */
}

.heading_container h2 {
    margin-bottom: 5px;
    padding-bottom: 5px;
    border-bottom: 2px solid #ddd;
}

@media (max-width: 768px) {
    .card-content {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .img-box {
        justify-content: center;
        margin-bottom: 15px;
    }
    .card-body .btn {
    background-color: #E4FF00;
    color: #000; /* Warna teks pada tombol */
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

    .card-body .btn:hover {
    background-color: #D1E300; /* Warna latar belakang saat hover */
    color: #000; /* Warna teks saat hover */
}
/* Footer styles */

}

</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poliklinik</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="container-fluid flex flex-col justify-center items-center text-white p-5"
        style="height: 400px; background-color: #007bff;">
        <h1 class="font-weight-bold mb-3">Sistem Temu Janji Pasien - Dokter</h1>
        <h5>
            Bimbingan Karir 2023 Bidang Website
        </h5>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-lg-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-user fa-fw mb-3 text-info" style="font-size: 34px;"></i>
                        <h3 class="">Pasien</h3>
                        <p class="card-text">Apabila anda adalah seorang Pasien, Silahkan Login terlebih dahulu untuk
                            melakukan pendaftaran sebagai pasien</p>
                        <a href="loginUser.php" class="btn btn-info">Login Sebagai Pasien</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-user-nurse fa-fw mb-3 text-dark" style="font-size: 34px;"></i>
                        <h3 class="">Dokter</h3>
                        <p class="card-text">Apabila anda adalah seorang Dokter, silahkan Login terlebih dahulu untuk
                            memulai melayani pasien</p>
                        <div class="d-grid">
                            <a href="login.php" class="btn btn-dark">Login Sebagai Dokter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.login-box -->
        <section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Testimoni Pasien</h2>
            <p>Para Pasien Yang Setia</p>
        </div>
        <div class="testimonial-card my-4">
            <!-- Testimonial 1 -->
            <div class="card">
                <div class="card-content d-flex flex-row">
                    <div class="img-box">
                        <img src="assets/images/testi1.jpg" alt="Client 1">
                    </div>
                    <div class="text-content ml-4">
                        <h6>Surya Kusuma</h6>
                        <p class="location">Lamongan</p>
                        <p class="testimonial-text">Pelayanan di Klinik ini sangat luar biasa. Dokternya ramah dan memberikan penjelasan yang mudah dipahami. Saya merasa sangat terbantu dan mendapatkan perawatan yang efektif</p>
                    </div>
                </div>
            </div>

   <!-- Testimonial 2 -->
   <div class="card mt-4">
                <div class="card-content d-flex flex-row">
                    <div class="img-box">
                        <img src="assets/images/testi2.jpg" alt="Client 2">
                    </div>
                    <div class="text-content ml-4">
                        <h6>Bayu Pratama</h6>
                        <p class="location">Purwodadi</p>
                        <p class="testimonial-text">Kunjungan saya ke Klinik ini sangat menyenangkan. Layanan cepat dan dokternya sangat profesional. Saya merasa diurus dengan baik dan mendapatkan solusi yang tepat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container text-center py-4">
        <p>&copy; Hastyantoko Dwiki Kahingide Poliklinik 2024 - All rights reserved</p>
    </div>
</footer>



        <!-- jQuery -->
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>