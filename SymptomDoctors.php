<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:rgb(200, 206, 231);">
  <section>
    <nav>
        <a href="home.html"> <img src="images/logo.png"> </a>
        <div class="nav-links">
          <ul>
            
            <b><li><a href="Doctor.php"> DOCTOR</a></li></b>
           
          </ul>
        </div>
    </nav>
  </section>
  <?php 
  

  $Symptom=$_GET['Symptom'];


  ?>
  <section class="syndrome-main-area">
    <div class="container"> 
      <div class="section-title">
        <h1 style="color:rgb(36, 6, 157);"> <?php echo $Symptom ?> Doctors </h1>
      
      <div class="syndrome-area">     

      <?php
            include 'admin/config.php';

            $sel= "SELECT * FROM tbldoctor WHERE Symptom = (SELECT ID FROM symtom WHERE Symptom='$Symptom')";
           

          
            $query=$conn-> query($sel);

            while($row=$query->fetch_assoc()){

        ?>
        <div class="single-syndrome">
          <div class="syndrome-content">
            <h3><?php echo $row['FullName'] ?></h3>
            <p>Qualifications: <?php echo $row['Details'] ?></p>

 
                <p>Speciality: <?php echo $row['Specialization'];?></p>
                                              
            <p>Chamber Name & Address: <?php echo $row['Address'] ?></p>
            <p>Visiting Hour: <?php echo $row['VisitingHours'] ?></p>
    
            <a href="appointment.php"><button class="button">Book Appointment</button></a>
            
          </div>
          <div class="syndrome-image">
          <img src="doctor/<?php echo $row['Image'];?>">
          </div>
        </div>

        <?php
       
    }
?>
     
        
          

      </div>
    </div>
  </section>
</body>
</html>
