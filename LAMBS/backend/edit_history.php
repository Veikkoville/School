<?php
session_start();

// Check if the user is authenticated, otherwise redirect to login
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: login.php');
    exit();
}

// Process form submission and update history
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['history'])) {
    $history = $_POST['history'];

    // Perform the update operation
    // ... (your code to update the history in the database or file)

    // Redirect to the dashboard after updating
    header('Location: dashboard.php');
    exit();
}

// Fetch the current history from the database or file
// ... (your code to retrieve the current history)

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
        <h1>Lambs Band - Edit History</h1>
    </header>

    <section>
    <h2>Edit History</h2>
        <form action="edit_history.php" method="POST">
            <textarea name="history" rows="10" cols="50"><?php echo $history; ?></textarea><br>
            <input type="submit" value="Save">
        </form>
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

