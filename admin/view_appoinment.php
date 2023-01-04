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
    <div class="wrap">
            <section class="app-content">

                <!--Main layout-->
                <main style="margin-top: 58px">
                    <div class=" col-md-42 container pt-4">

                        <h1>Appoinment Data</h1>



                        <table class="table align-middle mb-0 bg-white">

                            <thead class="bg-light border-3">

                                        <tbody>

                                                <th>S.No</th>
                                                <th>Appointment Number</th>
                                                <th>Patient Name</th>
                                                <th>Mobile Number</th>
                                                <th>Email</th>
                                                <th>Doctor</th>
                                                <th>Message</th>
                                                <th>Apply Date</th>
                                                <th>Remark</th>
                                                <th>Status</th>
                                                

<!-- 
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
    </script> -->

         <?php

            include 'config.php';

            $sel= "SELECT * FROM `tblappointment` a INNER JOIN `tbldoctor` b ON a.Doctor=b.ID";
            $query=$conn-> query($sel);

            while($row=$query->fetch_assoc()){

        ?>
                                            <tr>
												<!--<td><--?php echo ($cnt);?> </td>-->
												<td><?php echo $row['ID']; ?></td>
												<td><?php echo $row['AppointmentNumber']; ?></td>
												<td><?php echo $row['Name']; ?></td>
												<td><?php echo $row['MobileNumber']; ?></td>
												<td><?php echo $row['Email']; ?></td>

												<td><?php echo $row['FullName']; ?></td>

												<td><?php echo $row['Message']; ?></td>
												<td><?php echo $row['ApplyDate']; ?></td>
												<td><?php echo $row['Remark']; ?></td>
												<td><?php echo $row['Status']; ?></td>
                
                                                
>

                                            </tr>
											
											<?php
										}
										?>

                                        </tbody>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Appointment Number</th>
                                                <th>Patient Name</th>
                                                <th>Mobile Number</th>
                                                <th>Email</th>
                                                <th>Doctor</th>
                                                <th>Message</th>
                                                <th>Apply Date</th>
                                                <th>Remark</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot> -->
                                    </table>
                                </div>
                            </div><!-- .widget-body -->
                        </div><!-- .widget -->
                    </div><!-- END column -->


                </div><!-- .row -->
            </section><!-- .app-content -->
        </div><!-- .wrap -->
        <!-- APP FOOTER -->
       <!-- <--?php include_once('includes/footer.php');?>
        <!-- /#app-footer -->
    </main>
    <!--========== END app main -->

</body>

</html>