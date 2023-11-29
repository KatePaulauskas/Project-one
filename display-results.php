<?php
session_start();

// Check if the session variables are set
if (isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['message'])) {
    // Display the results
    echo "<h1>Form Submission Results</h1>";
    echo "<p>Name: " . htmlspecialchars($_SESSION['name']) . "</p>";
    echo "<p>Email: " . htmlspecialchars($_SESSION['email']) . "</p>";
    echo "<p>Message: " . htmlspecialchars($_SESSION['message']) . "</p>";
    
    // Clear the session data
    session_unset();
    session_destroy();
} else {
    echo "<p>No form data received.</p>";
}
?>