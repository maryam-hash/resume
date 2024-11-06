<?php
session_start();

// Define valid credentials
$validUsername = "testuser";
$validPassword = "password123";

// Check if form data is posted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION['loggedIn'] = true; // Set session variable

        // Handle the optional image upload
        if (!empty($_FILES['image']['name'])) {
            $imagePath = 'uploads/' . basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
            $_SESSION['uploadedImage'] = $imagePath;
        }

        // Redirect to dashboard
        header("Location: dashboard.php");
        exit;
    } else {
        // Redirect back to login with error
        header("Location: index.html?error=1");
        exit;
    }
}
?>
