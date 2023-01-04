<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
include 'config.php';
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
    if(isset($_POST['submit']))
  {
 $name=$_POST['name'];
  $mobnum=$_POST['phone'];
 $email=$_POST['email'];
 $appdate=$_POST['date'];
 $aaptime=$_POST['time'];
 $specialization=$_POST['specialization'];
  $doctorlist=$_POST['doctorlist'];
 $message=$_POST['message'];
 $aptnumber=mt_rand(100000000, 999999999);
 $cdate=date('Y-m-d');

if($appdate<=$cdate){
       echo '<script>alert("Appointment date must be greater than todays date")</script>';
} else {
$sql="insert into tblappointment(AppointmentNumber,Name,MobileNumber,Email,AppointmentDate,AppointmentTime,Specialization,Doctor,Message)values(:aptnumber,:name,:mobnum,:email,:appdate,:aaptime,:specialization,:doctorlist,:message)";
$query=$dbh->prepare($sql);
$query->bindParam(':aptnumber',$aptnumber,PDO::PARAM_STR);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':mobnum',$mobnum,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':appdate',$appdate,PDO::PARAM_STR);
$query->bindParam(':aaptime',$aaptime,PDO::PARAM_STR);
$query->bindParam(':specialization',$specialization,PDO::PARAM_STR);
$query->bindParam(':doctorlist',$doctorlist,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);

 $query->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Your Appointment Request Has Been Send. We Will Contact You Soon")</script>';
        echo "<script>window.location.href ='Home.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Doctor Appointment Page</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">

    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">

    <link href="assets/css/templatemo-medic-care.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body id="top" style="background-color: #f5f5f5;">
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
   
    <main>

        <section class="section-padding" id="booking">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <div class="booking-form" style="background-color: #f5f5f5;">

                            <h2 class="text-center mb-lg-3 mb-2">Book an appointment</h2>

                            <form role="form" method="post">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="name" id="name" class="form-control" value=" <?php echo $_SESSION['username']; ?>"
                                            placeholder="Full name" required='true'>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            class="form-control" placeholder="Email address" required='true' value=" <?php echo $_SESSION['email']; ?>">
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <input type="telephone" name="phone" id="phone" class="form-control"
                                            placeholder="Enter Phone Number" maxlength="10">
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <input type="date" name="date" id="date" value="" class="form-control">

                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <input type="time" name="time" id="time" value="" class="form-control">

                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <select onChange="getdoctors(this.value);" name="specialization"
                                            id="specialization" class="form-control" required>
                                            <option value="">Select specialization</option>
                                            <!--- Fetching States--->
                                            <?php
                                                $sql="SELECT * FROM tblspecialization";
                                                $stmt=$dbh->query($sql);
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                                while($row =$stmt->fetch()) { 
                                                ?>
                                            <option value="<?php echo $row['ID'];?>">
                                                <?php echo $row['Specialization'];?>
                                            </option>
                                            <?php }?>
                                        </select>
                                    </div>


                                    <div class="col-lg-6 col-12">
                                        <select name="doctorlist" id="doctorlist" class="form-control">
                                            <option value="">Select Doctor</option>
                                        </select>
                                    </div>



                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" id="message" name="message"
                                            placeholder="Additional Message"></textarea>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                        <button type="submit" class="form-control" name="submit" id="submit-button">Get
                                            appointment
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>



    <script>
    function getdoctors(val) {
        //  alert(val);
        $.ajax({

            type: "POST",
            url: "get_doctors.php",
            data: 'sp_id=' + val,
            success: function(data) {
                $("#doctorlist").html(data);
            }
        });
    }
    </script>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/scrollspy.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>