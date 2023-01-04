<?php
session_start();
error_reporting(0);
include 'config.php';

//if (!isset($_SESSION['username'])) {
    //header("Location: login.php");
//}


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> carefree care website </title>
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="libs/bower/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="libs/bower/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body style="background-color:rgb(255, 255, 255);">
  
  <section class="header">
    <nav>
        <a href="home.html"> <img src="images/logo.png"> </a>
        <div class="nav-links">
          <ul>
            <b><li><a href="Home.php">HOME</a></li></b>
            <b><li><a href="Doctor.php">DOCTOR</a></li></b>
            <b><li><a href="Blog.php">BLOGS</a></li></b>
            <b><li><a href="Symptom.php">SYMPTOM</a></li></b>
            <b><li><a href="Course.php">Course</a></li></b>
            <b><li><a href="appointment.php">Appointment</a></li></b>
            <b><li><a href="check-appointment.php">Appointment History</a></li></b>
            <b><li><a href="login.php" >Profile <?php echo  $_SESSION['username']; ?></a> </li></b>
          

            
          </ul>

        </div>
    </nav>
  </section>
  
  
<div class="text-box">
  <h1> WELCOME To Carefree Care</h1>
  <p> Carefree Care is an online doctor directory platform where you 
    get the best Doctors in Dhaka. <br> Our main objective are to improve healthcare facilities through online </br> </p>
</div>

<section class="service">
  <b><h1> Services We Offer</h1></b>
 <div class="row">
    <div class="service-col">
      <img src="images/do1.png">
      <h3> Find Doctor </h3>
      <p> Here we can find various categories doctors name and their details information.
      </p>
    </div>
    <div class="service-col">
      <img src="images/do2.jpeg">
      <h3> Make Appointment </h3>
      <p>You can book appointments with your preferrable doctor.
      </p>
    </div>
    <div class="service-col">
      <img src="images/do3.png">
      <h3> Health Information </h3>
      <p>We provide health tips to live a healthy lifestyle..
      </p>
    </div>
  </div>
</section>
<section class="cont">
  <h1> Connect With Us <br> Anywhere From The World</h1>
  <a href="#" class="hero-btn"> CONTACT US</a>
</section>

<section class="about-area">
  <div class="container">
    <div class="footer">
      <h4> About Us</h4>
      <p> Carefree care is a doctor directory and health information website 
      where we can find different type of doctors details and information and make an appointment with them.This website also gives suggestion about when to see a particular doctor for certain health issues. 
      It provides information about wellness and other health issues as well.
      </p>
      <div class="icon-box">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
      </div>
    </div>
  </div>
</section>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>
