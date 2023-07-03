<?php
// Handle registration form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  
  // Perform registration logic
  // Store user details in the database
  
  // Redirect user to the desired page
  header("Location: login.php");
  exit();
}
?>
