<?php
// Start or resume the session
session_start();

// Your existing PHP code for handling form submissions, database connections, etc.

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
?>

<!--html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box formbox">
            <header>Login Page</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username"> Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="field input">
                    <label for="username"> Email</label>
                    <input type="text" name="email" id="email" required>
                </div>
                <div class="field input">
                    <label for="username"> Password</label>
                    <input type="text" name="password" id="password" required>
                </div>
                <div class="field input">
                    <label for="username"> Referral Code</label>
                    <input type="text" name="code" id="code" >
                </div>
                <div class="field">
                    <input type="submit" name="submit" class="btn" value="Login" required>  
                </div>
                <div class="links">
                    Don't have an account? <a href="register.php">Sign Up Now</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>