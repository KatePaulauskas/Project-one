<?php
session_start();

// Collect form data
$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email-address'];
$_SESSION['message'] = $_POST['add-your-message'];

// Redirect to the results page
header('Location: display-results.php');
exit();
?>