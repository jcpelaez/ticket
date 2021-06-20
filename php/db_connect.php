<?php 	

$localhost = "localhost";
$username = "root";
$password = "123456789";
$dbname = "prueba";

$con = new mysqli($localhost, $username, $password, $dbname);

if($con->connect_error) {
  die("Connection Failed : " . $con->connect_error);
} 
?>