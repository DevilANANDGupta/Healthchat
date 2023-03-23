<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  // If the user is not logged in, redirect them back to the login page
  header('Location: index2.html');
  exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Chatbot Interface</title>
  </head>
  <body>
    <h2>Chatbot Interface</h2>
    <p>Welcome to the chatbot interface! Here, you can chat with our AI-powered chatbot.</p>
    <!-- Insert chatbot interface here -->
  </body>
</html>
