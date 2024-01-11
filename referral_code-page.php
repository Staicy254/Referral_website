<?php

include("connect.php");

// Start or resume the session
session_start();

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

// Generate and store the referral code in a session variable
$_SESSION['referral_code'] = generateReferralCode();

// Redirect back to the main page (index.php)
header("Location: index.php");
exit();
?>
