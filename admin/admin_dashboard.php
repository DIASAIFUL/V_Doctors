<?php
session_start();
error_reporting(0);

if (isset($_SESSION['username'])) {
    
 }

?>


<?php include 'a_navber.php';?>

<!--Main layout-->
<main style="margin-top: 58px">
    <div class="container pt-4">
        <div class="container pt-4">
            <div class="card">

            <h1>Welcome To Admin Dashboard</h1>
            </div>
            <div class="d-flex flex-column">
                <div class="p-2 bg-info"><a href="view_doctor.php"> View Doctor</a></div>
                <div class="p-2 bg-warning"> <a href="view_appoinment.php"> View Appoinment</a></div>
                <div class="p-2 bg-info"><a href="view_user.php"> View User</a></div>

                <div class="p-2 bg-warning"> <a href="view_appoinment.php"> View Specialized</a></div>
                <div class="p-2 bg-info"><a href="view_user.php"> View Symptom</a></div>
                <div class="p-2 bg-warning"> <a href="view_appoinment.php"> View Blog</a></div>
                

                
            </div>


        </div>
    </div>
</main>
<!--Main layout-->

</body>

</html>