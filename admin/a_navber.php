<?php
session_start();
error_reporting(0);
include 'config.php';



if (!isset($_SESSION['user_name'])) {
    header("Location: a_login.php");
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin_dashbord_style.css">
    <link rel="stylesheet" type="text/css" href="js/script.js">
</head>

<body class="menubar-left menubar-unfold menubar-light theme-primary">
<!--Main Navigation-->
<header>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                    <a href="admin_dashboard.php" class="list-group-item list-group-item-action py-2 ripple"
                        aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dashboard</span>
                    </a>

                    <a href="view_doctor.php" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-user fa-fw me-3"></i><span>Doctor</span></a>

                    <a href="view_appoinment.php" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-chart-pie fa-fw me-3"></i><span>Appoinment</span>
                    </a>
                    <a href="a_register.php" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-chart-bar fa-fw me-3"></i><span>Add New Admin</span></a>

                    <a href="../doctor/signup.php" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-chart-bar fa-fw me-3"></i><span>Add New Doctor</span></a>


                    <a href="view_specialized.php" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-calendar fa-fw me-3"></i><span>Specialized</span></a>
                    <a href="view_Symptom.php" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-calendar fa-fw me-3"></i><span>Symptom</span></a>
                    <a href="view_user.php" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-users fa-fw me-3"></i><span>Users</span></a>
                    <a href="admin_blog.php" class="list-group-item list-group-item-action py-2 ripple"><i
                            class="fas fa-blog fa-fw me-3"></i><span>Add Blog</span></a>
                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->

                <!-- Search form -->
                <form class="d-none d-md-flex input-group w-auto my-auto">
                    <input autocomplete="off" type="search" class="form-control rounded" placeholder='Search '
                        style="min-width: 225px" />
                    <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
                </form>

                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex flex-row">
                    <!-- Notification dropdown -->
                    <li class="nav-item dropdown">

                    </li>

                    <!-- Icon -->

                    <!-- Icon -->



                    <!-- Avatar -->
                    <li class="nav-item dropdown">

                        <a href="admin_profile.php" id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                        <?php echo  $_SESSION['user_name']; ?>
                            <i class="fas fa-user"></i>

                        </a>

                    </li>
                </ul>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->
