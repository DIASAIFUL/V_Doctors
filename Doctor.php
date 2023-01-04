<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: rgb(31, 31, 113)">
  <section class="doc_header">
    <nav>
        <a href="home.html"> <img src="images/logo.png"> </a>
        <div class="nav-links">
          <ul>
  

            <b><li><a href="Home.php">HOME</a></li></b>
            <b><li><a href="Doctor.php">DOCTOR</a></li></b>
           <b><li><a href="Blog.php">BLOGS</a></li></b>
           <b><li><a href="Symptom.html">SYMPTOM</a></li></b>
           <b><li><a href="Course.html">Course</a></li></b>
            
          </ul>

        </div>
    </nav>
   <center>
    <div class="sidebar">

      <center>
   
    <b style="color:rgb(21, 6, 87)"><h1class="title">CATEGORY </h1></b>
    <?php
    include 'admin/config.php';

    $sel= "SELECT * FROM tblspecialization";
    $query=$conn-> query($sel);

    while($row=$query->fetch_assoc()){

?>
      <ul class="category-group">

        <li class="list"><a href="specialists.php?category=<?php echo $row['Specialization'] ?>"> <h4><?php echo $row['Specialization'] ?></h4></a></li>
        
        <?php
       
      }
  ?>
       
        </ul>
      </center>
       </div>
  </section>
</center>
 
  
</body>
</html>