<?php 
session_start();
error_reporting(0);
include('../doctor/includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    $fname=$_POST['fname'];
    $mobno=$_POST['mobno'];
    $email=$_POST['email'];
    $details=$_POST['details'];
    $address=$_POST['address'];
    $visitinghoure=$_POST['visitinghoure'];
    $sid=$_POST['specializationid'];
    $SymptomId=$_POST['Symptom'];
    $password=md5($_POST['password']);

	$images=$_FILES['profile']['name'];
	$tmp_dir=$_FILES['profile']['tmp_name'];
	$imageSize=$_FILES['profile']['size'];

	
	$imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
	$valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
	$picProfile=rand(1000, 1000000).".".$imgExt;
	$upload_dir='../doctor/uploads/'.$picProfile;
	move_uploaded_file($tmp_dir, $upload_dir);



    $ret="select Email from tbldoctor where Email=:email";
    $query= $dbh -> prepare($ret);
    $query-> bindParam(':email', $email, PDO::PARAM_STR);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() == 0)
{

$sql="Insert Into tbldoctor(FullName,MobileNumber,Email,Details,Address,VisitingHours,Image,Specialization,Symptom,Password)Values(:fname,:mobno,:email,:details,:address,:visitinghoure,:upload_dir,:sid,:SymptomId,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobno',$mobno,PDO::PARAM_INT);
$query->bindParam(':details',$details,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':visitinghoure',$visitinghoure,PDO::PARAM_STR);
$query->bindParam(':upload_dir',$upload_dir,PDO::PARAM_STR);
$query->bindParam(':sid',$sid,PDO::PARAM_INT);
$query->bindParam(':SymptomId',$SymptomId,PDO::PARAM_INT);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{

echo "<script>alert('You have signup  Successfully');</script>";
}
else
{

echo "<script>alert('Something went wrong.Please try again');</script>";
}
}
 else
{

echo "<script>alert('Email-id already exist. Please try again');</script>";
}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
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
                            <h4 class="modal-title">Add New Doctor</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data">

                                <div class="form-group">

                                    <label for="uname">Doctor Name:</label>
                                    <input id="fname" type="text" class="form-control" placeholder="Full Name"
                                        name="fname" required="true">


                                </div>
                                <div class="form-group">
                                    <label for="pwd">Email:</label>
                                    <input id="email" type="email" class="form-control" placeholder="Email" name="email"
                                        required="true">
                                </div>
                                <div class="form-group">
                                    <input id="mobno" type="text" class="form-control" placeholder="Mobile" name="mobno"
                                        maxlength="10" pattern="[0-9]+" required="true">
                                </div>
                                <div class="form-group">
                                    <input id="mobno" type="text" class="form-control" placeholder="Qualifications"
                                        name="details" required="true">
                                </div>

                                <div class="form-group">
                                    <input id="mobno" type="text" class="form-control"
                                        placeholder="Chamber Name & Address" name="address" required="true">
                                </div>
                                <div class="form-group">
                                    <input id="mobno" type="text" class="form-control" placeholder="Visiting Hour"
                                        name="visitinghoure" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="profile" class="form-control-file border">
                                </div>


                                <div class="form-group">
                                    <select class="form-control" name="specializationid">
                                        <option value="">Choose Specialization</option>
                                        <?php
$sql1="SELECT * from tblspecialization";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query1->rowCount() > 0)
{
foreach($results1 as $row1)
{               ?>
                                        <option value="<?php  echo htmlentities($row1->ID);?>">
                                            <?php  echo htmlentities($row1->Specialization);?></option>
                                        <?php $cnt=$cnt+1;}} ?>
                                    </select>

                                </div>

                                
                                <div class="form-group">
                                    <select class="form-control" name="Symptom">
                                        <option value="">Choose Symptom</option>
                                        <?php
$sql1="SELECT * from symtom";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query1->rowCount() > 0)
{
foreach($results1 as $row1)
{               ?>
                                        <option value="<?php  echo htmlentities($row1->ID);?>">
                                            <?php  echo htmlentities($row1->Symptom);?></option>
                                        <?php $cnt=$cnt+1;}} ?>
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="img">Password:</label>

                                    <input type="password" name="password" required placeholder="Enter your password"
                                        class="form-control" required>
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

                        <h1>Doctor Data</h1>

                        <div class="col-md-42 text-right">
                            <button class="btn btn-success" data-toggle="modal" data-target="#myModal"> Add</button>
                        </div><br>

                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">

                            <thead class="bg-light border-3">
                                <tr>
                                    <th class="bg-light border-3">S.No</th>
                                    <th class="bg-light border-3">Image</th>
                                    <th class="bg-light border-3">Doctor Name</th>
                                    <th class="bg-light border-3">Mobile Number</th>
                                    <th class="bg-light border-3">Email</th>
                                    <th class="bg-light border-3">Qualifications</th>
                                    <th class="bg-light border-3">Address</th>
                                    <th class="bg-light border-3">Visiting Hours</th>
                                    <th class="bg-light border-3">Specialization</th>
                                    <th class="bg-light border-3">Symptom</th>
                                    <th class="bg-light border-3">CreationDate</th>
                                    <th class="bg-light border-3">Action</th>

                                </tr>
                            </thead>



                            <tbody>

                                <?php

            include 'config.php';

            $sel= "SELECT * FROM tbldoctor";
            $query=$conn-> query($sel);

            while($row=$query->fetch_assoc()){

        ?>
                                <tr>
                                    <!--<td><--?php echo ($cnt);?> </td>-->
                                    <td><?php echo $row['ID']; ?></td>
                                    <td><img src="../doctor/<?php echo $row['Image'];?>" height="100px" weigth="100px"></td>
                                    <td><?php echo $row['FullName']; ?></td>
                                    <td><?php echo $row['MobileNumber']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>
                                    <td><?php echo $row['Details']; ?></td>
                                    <td><?php echo $row['Address']; ?></td>
                                    <td><?php echo $row['VisitingHours']; ?></td>
                                    <td><?php echo $row['Specialization']; ?></td>
                                    <td><?php echo $row['Symptom']; ?></td>
                                    <td><?php echo $row['CreationDate']; ?></td>


                                    <td>

                                         <a class="btn btn-danger" href="delete.php?id=<?php echo $row['ID'];?>">DELETE</a>
                                    </td>

                                </tr>

                                <?php
										}
										?>

                            </tbody>
                            <!-- <tfoot>
                                <tr>
                                    <th>S.No</th>
                                    <th>Image</th>
                                    <th>Doctor Name</th>
                                    <th>Mobile Number</th>
                                    <th>Email</th>
                                    <th>Qualifications</th>
                                    <th>Address</th>
                                    <th>Visiting Hours</th>
                                    <th>Specialization</th>
                                    <th>CreationDate</th>
                                    <th>Action</th>

                                </tr>
                                </tr>
                            </tfoot> -->
                        </table>


                    </div>

                </main>
        </div><!-- .row -->
        </section><!-- .app-content -->
        </div><!-- .wrap -->
        </div>
        <!-- APP FOOTER -->
        <!-- <--?php include_once('includes/footer.php');?>
        <!-- /#app-footer -->
    </main>
    <!--========== END app main -->

</body>

</html>