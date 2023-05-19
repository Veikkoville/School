<?php
session_start();

// Check if the user is authenticated, otherwise redirect to login
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['video'])) {
    $targetDirectory = 'uploads/videos/';
    $targetFile = $targetDirectory . basename($_FILES['video']['name']);

    // Validate file type
    $videoFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedExtensions = ['mp4', 'avi', 'mov'];
    if (!in_array($videoFileType, $allowedExtensions)) {
        echo 'Invalid file type. Only MP4, AVI, and MOV files are allowed.';
        exit();
    }

    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES['video']['tmp_name'], $targetFile)) {
        echo 'Video uploaded successfully.';
    } else {
        echo 'Error uploading video.';
    }
}
?>
