<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name =$_POST['name'];
   $email =$_POST['email'];
   $pass =md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

         $select ="SELECT * FROM `admin` WHERE  email = '$email' ";

         $cheak_email = mysqli_query($conn, $select);
         if($cheak_email){


         if(mysqli_num_rows($cheak_email) > 0){
            $message[] = 'Email already exist'; 
         }else{
               if($pass != $cpass){
                  $message[] = 'confirm password not matched!';
               }elseif($image_size > 2000000){
               $message[] = 'image size is too large!';
               }else{
                     $insert = "INSERT INTO `admin`(`name`, `email`, `password`, `image`) VALUES ('$name','$email','$pass','$image')";
                     $query = mysqli_query($conn, $insert);
               }if($query){
                        move_uploaded_file($image_tmp_name, $image_folder);
                        $message[] = 'registered successfully!';
                        echo "<script type='text/javascript'> document.location ='a_login.php'; </script>";
                     }else{
                              $message[] = 'registeration failed!';
                        }
            }
         } 
      
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin_login_style.css">

</head>
<body>

   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>register With Admin Account</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="enter username" class="box" required>
      <input type="email" name="email" placeholder="enter email" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <input type="submit" name="submit" value="register now" class="btn">
      <p>already have an account? <a href="a_login.php">login now</a></p>
   </form>

</div>

</body>
</html>