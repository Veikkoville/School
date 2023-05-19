<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the entered username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the entered credentials are valid
    if ($username === 'lambs' && $password === 'lambs') {
        // Set the user as authenticated
        $_SESSION['authenticated'] = true;

        // Redirect to the band member dashboard
        header('Location: dashboard.php');
        exit();
    } else {
        // Invalid credentials, redirect back to the login page
        header('Location: login.php');
        exit();
    }
}
?>
