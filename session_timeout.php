<?php

// auto destroy session after 3 hour 
$session_timeout = 3 * 60 * 60; // 3 hours * 60 minutes/hour * 60 seconds/minute
// $session_timeout = 15; // after 15 seconds for testing

// Start the session
session_start();

// Check user logged in?
// if (!isset($_SESSION['u_id'])) {

//     header('Location: index.php');

//     exit;
// }

// Check if session expired
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $session_timeout)) {
    // End the current session
    session_unset();
    session_destroy();
    // Redirect the user to the login page
    header('Location: login.php');
    exit;
}

// Update the last activity time for the current session
$_SESSION['last_activity'] = time();

?>

<!-- The rest of your code goes here -->
