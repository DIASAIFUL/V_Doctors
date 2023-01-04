<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "damsmsdb";

$db_conn = mysqli_connect($server, $user, $pass, $database);

if (!$db_conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>