<?php
session_start();

include 'config.php';

if(isset($_POST['submit'])){
    $Symptom=$_POST['Symptom'];

   


        $insert="INSERT INTO `symtom`(Symptom) VALUES('$Symptom')";
        
        $result = mysqli_query($conn, $insert) or die(mysqli_error($conn));

        if($result) {
            echo "<script>alert('Wow! Add successfully Completed.')</script>";
            
        }else{
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
            
        }
    }



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Admin Dashboard</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
    <link rel="stylesheet" href="../assets/css/admin_style.css">
    <link rel="stylesheet" type="text/css" href="js/script.js">
</head>

<body class="menubar-left menubar-unfold menubar-light theme-primary">

    <?php include 'a_navber.php';?>
    <!-- APP MAIN ==========-->
    <main id="app-main" class="app-main">
        <div class="container">


            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Add New Symptom</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                
                            <input type="hidden" name="id" Value="<?php echo $row['ID']; ?>">
                                <div class="form-group">

                                    <label for="uname">Symptom Name:</label>
                                    <input type="text" name="Symptom" required placeholder="Enter your Specialization Name" class="form-control" required>  


                                </div>

                                <input type="submit" class="btn btn-success" name="submit" Value="ADD">

                            </form>

                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>


        <div class="wrap">
            <section class="app-content">

                <!--Main layout-->
                <main style="margin-top: 58px">
                    <div class=" col-md-42 container pt-4">

                        <h1>Symptom Data</h1>

                        <div class="col-md-42 text-right">
                            <button class="btn btn-success" data-toggle="modal" data-target="#myModal"> ADD </button>
                        </div><br>


                        <table class="table align-middle mb-0 bg-white">

                            <thead class="bg-light border-3">
                                <tr>
                                    <th class="bg-light border-3">SI No</th>
                                    <th class="bg-light border-3">Symptom Name</th>>
                                    <th class="bg-light border-3">Create Date</th>
                                    <th class="bg-light border-3">Action</th>

                                </tr>
                            </thead>


                            <tbody>



                                <?php

            include 'config.php';

            $sel= "SELECT * FROM symtom";
            $query=$conn-> query($sel);

            while($row=$query->fetch_assoc()){

        ?>
                                <tr>
                                    <!--<td><--?php echo ($cnt);?> </td>-->
                                    <td><?php echo $row['ID']; ?></td>

                                    <td><?php echo $row['Symptom']; ?></td>

                                    <td><?php echo $row['CreateDate']; ?></td>


                                    <td>
                                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row['ID'];?>">DELETE</a>
                                       
                                    </td>

                                </tr>

                                <?php
										}
										?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="bg-light border-3">SI No</th>
                                    <th class="bg-light border-3">Symptom Name</th>>
                                    <th class="bg-light border-3">Create Date</th>
                                    <th class="bg-light border-3">Action</th>

                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </main>
        </div><!-- .row -->
    </section><!-- .app-content -->
    </div><!-- .wrap -->
    </div>
    <!-- APP FOOTER -->
    <!-- <--?php include_once('includes/footer.php');?>
        < /#app-footer -->
    </main>
    <!--========== END app main -->

</body>

</html>