<?php
// Start the session
session_start();

// Get the username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Validate the username and password
if ($username == 'admin' && $password == 'password') {
  // Set the session variable to indicate that the user is logged in
  $_SESSION['loggedin'] = true;
  header('Location: chatbot.php');

  
  // Redirect the user to the chatbot page
  header('Location: index2.html');
  exit;
} else {
  // Display an error message and redirect the user back to the login page
  echo "Invalid username or password. Please try again.";
  header('Refresh: 3; URL=index2.html');
  exit;
}
?>
