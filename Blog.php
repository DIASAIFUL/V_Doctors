<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav>
        <a href="home.html"> <img src="images/logo.png"> </a>
        <div class="nav-links">
            <ul>


                <b>
                    <li><a href="Home.php">HOME</a></li>
                </b>
                <b>
                    <li><a href="Doctor.php">DOCTOR</a></li>
                </b>
                <b>
                    <li><a href="Blog.php">BLOGS</a></li>
                </b>
                <b>
                    <li><a href="Symptom.php">SYMPTOM</a></li>
                </b>
                <b>
                    <li><a href="Course.php">Course</a></li>
                </b>
            </ul>

        </div>
    </nav>
    <section class="post" id="post">
        <div class="container min-vh-100">
            <center>
                <b>
                    <h1 style="color:rgb(36, 6, 157);"> Our Posts </h1>
                </b>
            </center>

            <!---- connect with datadase------>


            <div class="box-container">
            <?php
            include 'admin/config.php';

            $sel= "SELECT * FROM blog";
            $query=$conn-> query($sel);

            while($row=$query->fetch_assoc()){

        ?>
                <div class="box">
                    <img src="admin/<?php echo $row['image']; ?>">
                    <div class="content">
                        <h4><?php echo $row['create_date']; ?> </h4>
                        <a href="p.html">
                            <h3> <?php echo $row['title']; ?></h3>
                        </a>
                        <p> <?php echo $row['description']; ?> </p>

                    </div>
                </div>

            

            <?php
       
       }

     ?>
</div>
    </section>


</body>

</html>