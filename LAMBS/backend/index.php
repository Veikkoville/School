<?php
require_once('connect.php');

// Fetch band information
$bandQuery = $yhteys->query("SELECT * FROM bands");
$band = $bandQuery->fetch(PDO::FETCH_ASSOC);

// Fetch albums
$albumsQuery = $yhteys->query("SELECT * FROM albums");
$albums = $albumsQuery->fetchAll(PDO::FETCH_ASSOC);

// Fetch upcoming concerts
$concertsQuery = $yhteys->query("SELECT * FROM concerts WHERE date >= CURDATE() ORDER BY date ASC");
$concerts = $concertsQuery->fetchAll(PDO::FETCH_ASSOC);

// Fetch music videos
$videosQuery = $yhteys->query("SELECT * FROM videos");
$videos = $videosQuery->fetchAll(PDO::FETCH_ASSOC);

// Fetch social media posts
$postsQuery = $yhteys->query("SELECT * FROM posts");
$posts = $postsQuery->fetchAll(PDO::FETCH_ASSOC);
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
            background-image: url("IMG_1200.jpg");
            background-repeat: no-repeat;
            background-size: cover;
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
        <h2>Welcome to Lambs Band Website</h2>
        <p>Explore our music, videos, upcoming concerts, and more!</p>
    </section>



    <section id="concerts">
        <h2>Upcoming Concerts</h2>
        <?php foreach ($concerts as $concert): ?>
            <div class="concert">
                <h3><?php echo $concert['venue']; ?></h3>
                <p>Date: <?php echo $concert['date']; ?></p>
                <p>Location: <?php echo $concert['location']; ?></p>
            </div>
        <?php endforeach; ?>
    </section>

    <section id="music">
        <h2>Music</h2>
        <p>Listen to our music on:</p>
        <ul>
            <li><a href="https://open.spotify.com/artist/5J3AcDsarvqsLXoIOdc80i">Spotify</a></li>
            <li><a href="https://applemusic.com">Apple Music</a></li>
            <li><a href="https://www.youtube.com/playlist?list=PL437A552EBAAB6DA8">YouTube</a></li>
        </ul>
        <p>Purchase our music on:</p>
        <ul>
        <li><a href="https://itunes.com">iTunes</a></li>
            <li><a href="https://amazon.com">Amazon</a></li>
            <li><a href="https://bandcamp.com">Bandcamp</a></li>
        </ul>
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

        <section id="social">
        <h2>Social Media</h2>
        <?php foreach ($posts as $post): ?>
            <div class="post">
                <h3><?php echo $post['title']; ?></h3>
                <p><?php echo $post['content']; ?></p>
                <p>Date: <?php echo $post['date']; ?></p>
                <p>Author: <?php echo $post['author']; ?></p>
            </div>
        <?php endforeach; ?>
    </section>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com"></script>
       
</body>
</html>

