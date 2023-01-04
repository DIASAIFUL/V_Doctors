<?php
session_start();
error_reporting(0);
include 'config.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}


 ?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color:rgb(4, 18, 74);">
    <div class="holder">
        <div class="card">
            <div class="inner-box">
                <div class="card-front" <center>
                    <h2>Welcome <?php echo $_SESSION['username']; ?></h2>

                    <br>
                    <span> Your Username :</span>
                    <p class="input-box">  <?php echo $_SESSION['username']; ?> </p>
                    <span>Your email :</span>
                    <p class="input-box" >  <?php echo $_SESSION['email']; ?> </p>


                    </center>
                    <a href="Home.php"><button  class="submit-btn"> Go To Home Page</button></a>
                    <a href="logout.php"><button class="submit-btn" > Logout here</button></a>

                </div>
            </div>
        </div>
    </div>
</body>

</html>