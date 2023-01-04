<?php
session_start();
error_reporting(0);
include 'config.php';

if (isset($_SESSION['username'])) {
    header("Location: profile.php");
 }
if (isset($_POST['submit'])){
$email=$_POST['email'];
$password=md5($_POST['password']);
$login_check= "SELECT * FROM user WHERE email='$email' AND password='$password'";
$result=mysqli_query($db_conn,$login_check);



if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];
    header("Location: Home.php");
}else{
    
    echo "<script>alert('Email and Password Not Matched.')</script>";
}
}
 ?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LogIn Page</title>
    
    <link rel="stylesheet" href="style.css">
    

</head>

<body style="background-color:rgb(4, 18, 74);">



    <div class="holder">
        <div class="card">
            <div class="inner-box">
                <div class="card-front">
                   


                        <form action="" method="post">

                        <b>
                            <h2>LogIn</h2>
                        </b>

                        <input type="email" name="email" class="input-box" placeholder="your email id" required>

                        <input type="password" name="password" class="input-box" placeholder="password" required>

                        <button type="submit" name="submit" class="submit-btn"> Submit</button>
                        <br>

                        <input type="checkbox"><span> Remember me</span>
                        <br>

                        <a href="#">Forget Password</a>
                        <br>

                        <a href="signup.php"><button type="button" class="submit-btn"  > I'm new here</button></a>

                        <a href="doctor/login.php"><button type="button" class="submit-btn"  >Login As a Doctor</button></a>
                        <a href="admin/a_login.php"><button type="button" class="submit-btn"  >Login As a Admin</button></a>

                    </form>

                



                </div>
            </div>
        </div>
    </div>
</body>

</html>