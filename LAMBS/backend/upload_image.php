<?php
session_start();

// Check if the user is authenticated, otherwise redirect to login
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $targetDirectory = 'uploads/images/';
    $targetFile = $targetDirectory . basename($_FILES['image']['name']);

    // Validate file type
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $allowedExtensions)) {
        echo 'Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.';
        exit();
    }

    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
        echo 'Image uploaded successfully.';
    } else {
        echo 'Error uploading image.';
    }
}
?>
