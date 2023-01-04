<?php
session_start();

include 'config.php';

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);


    $emptymsg1 = $emptymsg2 = $pasmatchmsg = '';

    if(empty($username)){
        $emptymsg1 = 'Write username';
    }
    if(empty($email)){
        $emptymsg2 = 'Write email';
    }
    $select = mysqli_query($db_conn, "SELECT * FROM `user` WHERE email = '$email' ") or die('query failed');

    if(mysqli_num_rows($select) > 0){
        echo "<script>alert('Email already exist')</script>";
    }else{
        $insert="INSERT INTO `user`(username, email, password) VALUES('$username','$email','$password')";
        
        $result = mysqli_query($db_conn, $insert) or die(mysqli_error($db_conn));

        if($result) {
            echo "<script>alert('Wow! User Registration successfully Completed.')</script>";
            
        }else{
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
            echo "<script type='text/javascript'> document.location ='signup.php'; </script>";
        }
    }

}

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register Page</title>

    <link rel="stylesheet" href="style.css">

</head>

<body style="background-color:rgb(12, 27, 86);">
    <div class="holder">
        <div class="card">
            <div class="inner-box">
                <div class="card-front">


                    <form action="" method="post">


                        <b>
                            <h2>Register</h2>
                        </b>
                        <input type="text" name="username" required placeholder="Enter your username" class="input-box"
                          value="<?php if(isset($_POST['submit'])){echo $username; } ?>" required>  
                        <?php if(isset($_POST['submit'])) echo "<span class='text-denger'>".$emptymsg1."</span>" ?>

                        <input type="email" name="email" required placeholder="Enter your email" class="input-box"
                            value="<?php if(isset($_POST['submit'])){echo $email; } ?>" required>
                        <?php if(isset($_POST['submit'])) echo "<span class='text-denger'>".$emptymsg2."</span>" ?>

                        <input type="password" name="password" required placeholder="Enter your password"
                            class="input-box" required>
                        <button type="submit" name="submit" class="submit-btn"> Submit</button><br>
                        <a href="login.php"><button type="button" class="submit-btn"> I've an account.</button></a>

                    </form>


                </div>
            </div>
        </div>
    </div>
</body>

</html>