<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<section class="symp_header">

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
 

  <center>
    <b><h1 style="color:rgb(36, 6, 157);"> SYMPTOMS </h1></b>
 </center>
 <center>
 <div class="sidebar">

   <center>

 <b style="color:rgb(11, 5, 24)"><p>Select a body part where you are experiencing symtoms </p></b>

   <ul class="category-group">
     <!-- <li class="list"><a href="sym2.html"> <h4>Head and Neck</h4></a></li>
     
     <li class="list"><a href="sym3.html"> <h4>Hand & Arm</h4></a></li>
     <li class="list"><a href="sym1.html"> <h4>Chest and Back</h4></a></li>
    
     ?>
      <ul class="category-group"> -->

      <?php
    include 'admin/config.php';

    $sel= "SELECT * FROM symtom";
    $query=$conn-> query($sel);

    while($row=$query->fetch_assoc()){

?>
        <li class="list"><a href="SymptomDoctors.php?Symptom=<?php echo $row['Symptom'] ?>"> <h4><?php echo $row['Symptom'] ?></h4></a></li>
        
        <?php
       
      }
  ?>


   </ul>
  </center>
    </div>

</center>

</section>

   

</body>
</html>