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
    <title>Registration Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box formbox">

        <?php 
        include("php/config.php");

        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            //verifying the unique email
            $verify_query = mysqli_query($con, "SELECT Email FROM `registered-users` WHERE Email = '$email'");

            if(!$verify_query) {
                die("Query failed: " . mysqli_error($con));
            }

            // Check if the query returned a valid result set
            $num_rows = ($verify_query) ? mysqli_num_rows($verify_query) : 0;

            if($num_rows != 0){
                echo "<div class ='message'>
                    <p>This email is already taken by another user. Try Another Email.</p>
                    </div> <br>";
                echo "<a href='javascript:self.history.back()'><button class='btn'> Go Back </button>";
            }
            else {
                $insert_query = mysqli_query($con, "INSERT INTO `registered-users` (Username, Email, Password) VALUES ('$username', '$email', '$password')");
            

                if(!$insert_query) {
                    die("Error: " . mysqli_error($con));
                }

                echo "<div class ='message'>
                    <p>Registration Successful</p>
                    </div> <br>";
                echo "<a href='index.php'><button class='btn'>Login Now </button></a>";
            }
        } else {
        ?>
            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username"> Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="field input">
                    <label for="email"> Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password"> Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                <div class="field">
                    <input type="submit" name="submit" class="btn" value="Register" required>  
                </div>
                <div class="links">
                    Already a member? <a href="index.php">Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>