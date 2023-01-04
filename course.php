<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
            
            
          </ul>

        </div>
    </nav>

<section class="service">
    <b><h1 style="color:blue;"> Courses We Offer</h1></b>
   <div class="row">
      <div class="service-col">
        <!-- <img src="images/smart.png"> -->
        <img src="<?php echo $row['image']; ?>">
        <h3> Smart Parenting </h3>
        <p>By Ayesha Siddika</p>
        <a href="https://smartparenting.family/bn/courses/children-brain-development/?fbclid=IwAR3UZrTrIUmG2Nl6cGpHeWe8eL1D95DCeA1nVmR_boqPDoL3sL_JM6AtTpY"><button class="button">Buy This Course</button></a>
      </div>
      
    </div>    
    </div>
  </section>
  </section>
</body>
</html>
