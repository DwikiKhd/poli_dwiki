<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
</head>
<style>
body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.dashboard-header {
    background-color: #007bff;
    color: white;
    padding: 20px;
    text-align: center;
}

.dashboard-cards {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding: 20px;
    justify-content: center;
}
.banner-section {
    background-color: #464646; /* Example background color; adjust as needed */
    text-align: center;
    padding: 40px 20px; /* Adjust the padding as needed */
    color: white; /* This sets the default text color to white for all text within the section */
}
/* If you have a fade-in effect, you can define it here */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

.fade-in {
    animation: fadeIn 2s ease-in-out;
}
.banner-section,
.video-section {
    padding: 20px;
    background-color: #e9ecef;
}

.banner-section h1,
.video-section h2 {
    color: #51604F;
}

.banner-section p,
.video-section p {
    color: #333;
}

.floating-container .row > div {
    margin-bottom: 20px;
}

.floating-container img {
    max-width: 100px;
    height: auto;
    margin: 0 auto;
}
.floating-container p {
    text-align: center;
    margin-top: 20px;
}

/* Custom colors for cards - you can set your own */
#total-patients {
    background-color: #17a2b8;
    color: white;
}

#appointments {
    background-color: #28a745;
    color: white;
}
.service-highlights {
    background-color: #eef2f5;
    padding: 40px 0;
    text-align: center;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    justify-content: center;
}

.service-row {
    width: 100%;
    display: flex;
    justify-content: center;
}

.service-item {
    background-color: #ffffff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    /* If you want the card to take up less width and be more centered */
    max-width: 300px; /* Adjust max-width as per your design */
}

.service-icon img {
    max-width: 250px; /* Adjust as needed */
    margin-bottom: 20px;
}

.service-item h3 {
    color: #007bff;
    margin: 10px 0;
}

.service-item p {
    color: #555;
    line-height: 1.5;
}
.video-greetings-section {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px 20px;
    gap: 20px;
}

.video-container {
    flex: 1;
    text-align: center; /* Center the video placeholder */
}

.video-placeholder {
    background-color: #000; /* Placeholder background */
    position: relative;
    padding-top: 56.25%; /* 16:9 Aspect Ratio */
}

.video-placeholder iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.greetings-container {
    flex: 1;
    max-width: 600px;
}

.greetings-container h1 {
    font-size: 30px;
    font-weight: bold;
    margin-bottom: 20px;
}

.greetings-container h2 {
    font-size: 24px;
    margin-bottom: 15px;
}

.greetings-container p {
    font-size: 18px;
    line-height: 1.6;
}
/* Responsive design */
@media (max-width: 992px) {
    .video-greetings-section {
        flex-direction: column;
    }

    .video-container {
        width: 100%; /* Full width on smaller screens */
    }

    .greetings-container {
        max-width: 100%; /* Full width on smaller screens */
        text-align: center; /* Center text for smaller screens */
    }
}
@media (max-width: 992px) {
    .service-item {
        flex-basis: calc(50% - 30px);
    }
}

@media (max-width: 600px) {
    .service-item {
        flex-basis: 100%;
    }
}

@media (max-width: 768px) {
    .sidebar {
        width: 100%;
    }
    
}
</style>
    <!-- Section 1: Banner -->
    <section class="banner-section">
        <div class="container text-center my-5 fade-in">
            <h1><b>Selamat Datang di Poliklinik</b></h1>
            <p>Kesehatan Penting, Kualitas Hidup Berkah: Poliklinik Kami. Mengerti Kebermaknaan Hidup Sehat Anda.</p>
        </div>
    </section>
<!-- Custom Section: Service Highlights -->
<section class="service-highlights">
    <div class="container">
        <div class="service-row">
            <div class="service-item">
                <div class="service-icon">
                    <img src="assets/images/daftarpoli.jpg" alt="Quality Care">
                </div>
                <h3>Daftar Poli</h3>
                <p>Jika Pasien ingin melakukan periksa, silahkan daftar poli terlebih dahulu.</p>
                <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="daftarPoliklinik.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</section>


<!-- Section 3: Video and Greetings -->
<section class="video-greetings-section">
    <div class="video-container">
        <!-- Placeholder for video or iframe embed from a service like YouTube -->
        <div class="video-placeholder">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/dysFRHD251k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div class="greetings-container">
        <h1>Pelayanan Kesehatan Terbaik, Datanglah ke Poliklinik Kami.</h1>
        <p>Selamat datang di Poliklinik Kami, tempat di mana perhatian terhadap kesehatan Anda menjadi prioritas utama kami. Kami bangga menyambut Anda sebagai bagian dari keluarga kami yang peduli akan kesejahteraan Anda.</p>
    </div>
</section>


</body>
</html>