<?php
session_start();

// Check if the user is authenticated, otherwise redirect to login
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>
    <img src="lambslogo.jpg" alt="Lambs Band Logo">
     Lambs Band
</title>
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
        <h1>Lambs Band - Dashboard</h1>
    </header>

    <section>
        <h2>Welcome, Band Member!</h2>
        <h3>Upload Image</h3>
        <form action="upload_image.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" accept="image/*" required>
            <input type="submit" value="Upload">
        </form>

        <h3>Upload Video</h3>
        <form action="upload_video.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="video" accept="video/*" required>
            <input type="submit" value="Upload">
        </form>

        <h3>Edit Files</h3>
        <ul>
            <li><a href="edit_history.php">Edit History</a></li>
            <li><a href="edit_albums.php">Edit Albums</a></li>
            <li><a href="edit_concerts.php">Edit Concerts</a></li>
            <li><a href="edit_music.php">Edit Music</a></li>
            <li><a href="edit_videos.php">Edit Videos</a></li>
            <li><a href="edit_news.php">Edit News</a></li>
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
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com"></script>
</body>
</html>
