<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
</head>
<body>
    <h2>Welcome to Your Dashboard!</h2>
    
    <?php
    // Display uploaded image if available
    if (isset($_SESSION['uploadedImage'])) {
        echo "<p>Here is the image you uploaded:</p>";
        echo "<img src='" . $_SESSION['uploadedImage'] . "' alt='Uploaded Image' style='max-width:100%; height:auto;'/>";
    }
    ?>

    <p>Nature's beauty, puts the heart at ease.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
