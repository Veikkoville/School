<?php
// Include the database connection
require_once 'connect.php';

// Query to retrieve the band's history
$query = "SELECT `description` FROM `bands` WHERE `band_id` = 1"; // Assuming band_id 1 represents Lambs band
$result = $yhteys->query($query);

// Check if the query was successful
if ($result && $result->rowCount() > 0) {
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $history = $row['description'];
} else {
    $history = 'Band history not available.';
}

// Close the database connection
$yhteys = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lambs Band </title>
    <style>
        .logo {
            height: 40px;
            margin-right: 10px;
        }
        body {
            background-image: url("Lambs_Seinäjoki20080601_0047.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            color: #333;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../frontend/css/styles.css">
</head>
<body>
<header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                
                <img src="lambslogo.jpg" alt="Lambs Band Logo" class="logo">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.php">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="history.php">History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="albums.php">Albums</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="concerts.php">Concerts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="music.php">Music</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="videos.php">Videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="partners.php">Partners</a>
                        </li>
                    </ul>
                    <a class="btn btn-outline-light" href="login.php">Login</a>
                </div>
            </div>
        </nav>
    </header>

    <section>
        <h2>Band History</h2>
        <p><?php echo $history; ?></p>
    </section>

    <footer class="bg-dark text-light text-center py-4">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Lambs Band. All rights reserved.</p>
            <div class="social-media">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com"></script>
</body>
</html>
