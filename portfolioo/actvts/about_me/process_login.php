<?php
// Define the correct username and password
$correct_username = "user";
$correct_password = "123";

// Get user input from the form
$input_username = $_POST['username'];
$input_password = $_POST['password'];

// Check if the input matches the correct username and password
if ($input_username === $correct_username && $input_password === $correct_password) {
    // Redirect to another page if the login is successful
    header("Location: conditional.php	");
    exit();
} else {
    // If the login is not successful, display an error message or redirect back to the login page
    header("Location: index.php");
    exit();
}
?>
