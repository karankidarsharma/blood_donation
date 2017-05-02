<?php

$servername="localhost";
$username="root";
$password="pass";
$dbname="bds";
$con = mysqli_connect($servername, $username, $password, $dbname);

if(!con){
	die("connection failed" . mysqli_connect_error());
}else{
	echo nl2br ("\n connected to database");

	session_start();
	$_SESSION["Logonsuccessful"] = "Y";
}
?>