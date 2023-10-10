<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$host ="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "index";


$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
$sql = "SELECT * FROM data WHERE username = '$username' and password = '$password'";

$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if($num==1){
	header("location:quizz.php");
}else{
	echo '<script> alert("Invalid username or password");</script>';
}



?>