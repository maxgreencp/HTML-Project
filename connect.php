<?php 

$localhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "signup";

$connect = new mysqli("localhost","root","root","signup") or die("Unable to connect");

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} 

?>