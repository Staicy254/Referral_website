<?php
// Start or resume the session
session_start();

// Include the central connection file
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update Details</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Logo</a></p>
        </div>

        <div class="right-links">
            <a href="referral_code-page.php">Get Referral Code</a>
            <a href="logout.php"><button class="btn">Logout</button></a>
        </div>
    </div>
    <div class="container">
        <div class="box formbox">
            <header>Details</header>
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
                    <label for="username"> Referral Code</label>
                    <input type="text" name="code" id="code" >
                </div>
                <div class="field">
                    <input type="submit" name="submit" class="btn" value="Update" required>  
                </div>
            </form>
        </div>
    </div>
</body>
</html>