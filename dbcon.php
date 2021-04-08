<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'project';
$conn = mysqli_connect($server, $user, $pass)
or die ("Server Failure, Dont worry we are working on it... \n" . mysqli_error ());
mysqli_select_db($conn,$db)
or die ("Could not connect to database ... \n" . mysqli_error ());
?>

