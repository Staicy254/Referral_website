<?php
// Start or resume the session
session_start();

// Include the configuration file
include("php/config.php");

// Function to check if a user is logged in
function isLoggedIn() {
    return isset($_SESSION['username']);
}

// Function to generate a random referral code
function generateReferralCode() {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code = '';

    // Generate a 6-character random code
    for ($i = 0; $i < 6; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $code;
}

// Check if there's a referral code in the URL
if (isset($_GET['referral_code'])) {
    $referral_code = $_GET['referral_code'];

    // Validate and process the referral code
    // You might want to check against a database or some predefined codes
    // and associate the referral with the user.

    // Example: Store the referral code in a session variable for later use
    $_SESSION['referral_code'] = $referral_code;
}

// Redirect users based on their login status
if (isLoggedIn()) {
    // If logged in, redirect to home.php
    header("Location: home.php");
    exit();
} else {
    // If not logged in, redirect to index.php
    header("Location: index.php");
    exit();
}
?>