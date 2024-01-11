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
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Logo</a></p>
        </div>

        <div class="right-links">
            <a href="#">Update Details</a>
            <a href="logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>
    <main>
        <div class="main-box top">
            <div class="top">
                <div class="box">
                    <p>Congratulations!<b>Your number of referrals are:</b> </p>
                </div>
                <div class="box">
                    <p>Email<b>Username</b> </p>
                </div>
            </div>
            <div class="bottom">
                <div class="box">
                    <p>The more referrals the better</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>