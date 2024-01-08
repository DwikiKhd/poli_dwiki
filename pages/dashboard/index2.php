<?php
    require 'config/koneksi.php';
    $id_poli = $_SESSION['id_poli'];

    $query_poli = "SELECT nama_poli FROM poli WHERE id = $id_poli";
    $result = mysqli_query($mysqli,$query_poli);

    if ($result) {
        // Ambil hasil query
        $row = mysqli_fetch_assoc($result);

        // Tampilkan nama poli
        $nama_poli = $row['nama_poli'];
    } else {
        // Handle error jika query gagal
        $nama_poli = "Tidak dapat mendapatkan nama poli";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style>
    html, body {
        height: 100vh; /* Full height of the viewport */
        width: 100vw; /* Full width of the viewport */
        margin: 0; /* Reset default margin */
        padding: 0; /* Reset default padding */
        overflow: hidden; /* Hide scrollbars if the content exceeds the viewport */
        align-items: center;
        justify-content: flex-start; /* Align content to the top */
    }
    .content-header {
    width: 100%; /* Full width */
    background-color: #76b852;
    padding: 20px 0;
    margin-bottom: 30px;
    border-bottom: 5px solid #3498db;
    text-align: center; /* Centered text */
}
.container-fluid {
    width: 100%; /* Use the full width of the viewport */
    max-width: 1920px; /* Maximum width to match 1920px screen resolution */
    padding: 0 15px; /* Padding on the sides */
    margin: auto; /* Center the container */
}

    /* Assuming .content-wrapper wraps all the content */
    .content-wrapper {
        display: flex;
        flex-direction: column;
        height: 100vh; /* Full height of the viewport */
    }

    /* Full-width header */
    .header {
        width: 100%;
        /* Other styling */
    }

    
    .card-custom {
            margin: 10px;
            border: none;
            border-radius: 20px; /* More rounded corners */
            box-shadow: 0 2px 20px rgba(50, 50, 93, 0.1);
            transition: all 0.3s ease;
        }

        .card-custom:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 30px rgba(50, 50, 93, 0.2);
        }

        .card-body {
            padding: 20px;
            background: linear-gradient(45deg, #83eaf1, #63a4ff); /* Gradient background */
            color: white; /* White text for better readability */
        }

        .info-box-number {
            font-size: 2rem; /* Larger number font */
        }

        h1, h4 {
            text-align: left; /* Aligning header to the left */
        }

        /* Custom layout */
        .container-fluid {
            padding: 0 50px; /* More padding on the sides */
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .content-header {
                text-align: center;
            }

            h1, h4 {
                text-align: center;
            }
        }

    </style>
</head>

<body>
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 style="text-align: center;">Selamat Datang, Dokter <?php echo $username; ?></h1>
                    <h4 style="text-align: center;">Anda berada di Poli: <?php echo $nama_poli; ?></h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
    <div class="row">
    <!-- Card 1: Total Appointments -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-custom">
            <div class="card-body">
                <i class="fa fa-calendar fa-3x text-white mb-3"></i>
                <h5 class="info-box-text">Total Appointments</h5>
                <span class="info-box-number">32</span>
            </div>
        </div>
    </div>

    <!-- Card 2: Patients Treated -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-custom" style="background: linear-gradient(to right, #56ab2f, #a8e063);">
            <div class="card-body">
                <i class="fa fa-user-md fa-3x text-white mb-3"></i>
                <h5 class="info-box-text">Patients Treated</h5>
                <span class="info-box-number">128</span>
            </div>
        </div>
    </div>

    <!-- Card 3: New Messages -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-custom" style="background: linear-gradient(to right, #ff512f, #f09819);">
            <div class="card-body">
                <i class="fa fa-envelope fa-3x text-white mb-3"></i>
                <h5 class="info-box-text">New Messages</h5>
                <span class="info-box-number">5</span>
            </div>
        </div>
    </div>

    <!-- Card 4: Available Beds -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-custom" style="background: linear-gradient(to right, #1fa2ff, #12d8fa);">
            <div class="card-body">
                <i class="fa fa-bed fa-3x text-white mb-3"></i>
                <h5 class="info-box-text">Available Beds</h5>
                <span class="info-box-number">20</span>
            </div>
        </div>
    </div>
</div>

    </section>

    <!-- Bootstrap JS and other scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
