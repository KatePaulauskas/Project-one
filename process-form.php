<?php
// Start the session
session_start();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store form data in session variables
    $_SESSION['name'] = $_POST['name'] ?? '';
    $_SESSION['email'] = $_POST['email-address'] ?? '';
    $_SESSION['message'] = $_POST['add-your-message'] ?? '';

    // Redirect to the display-results page
    header('Location: display-results.php');
    exit();
}
?>