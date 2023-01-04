<?php
include 'config.php';

    $id=$_GET['id'];

    // sql to delete a record
    $sql = "DELETE FROM symtom WHERE ID='$id'";

    if ($conn->query($sql) === TRUE) {
       header("Location: view_Symptom.php");
    } else {
        echo "Error deleting record";
    }



    $id=$_GET['id'];

    // sql to delete a record
    $sql = "DELETE FROM tbldoctor WHERE ID='$id'";

    if ($conn->query($sql) === TRUE) {
       header("Location: view_doctor.php");
    } else {
        echo "Error deleting record";
    }




    $id=$_GET['id'];

    // sql to delete a record
    $sql = "DELETE FROM user WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
       header("Location: view_user.php");
    } else {
        echo "Error deleting record";
    }



    $id=$_GET['id'];

    // sql to delete a record
    $sql = "DELETE FROM blog WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
       header("Location: admin_blog.php");
    } else {
        echo "Error deleting record";
    }


    $id=$_GET['id'];

    // sql to delete a record
    $sql = "DELETE FROM tblspecialization WHERE ID='$id'";

    if ($conn->query($sql) === TRUE) {
       header("Location: view_specialized.php");
    } else {
        echo "Error deleting record";
    }

    $id=$_GET['id'];

    // sql to delete a record
    $sql = "DELETE FROM course WHERE ID='$id'";

    if ($conn->query($sql) === TRUE) {
       header("Location: admin_course.php");
    } else {
        echo "Error deleting record";
    }


?>