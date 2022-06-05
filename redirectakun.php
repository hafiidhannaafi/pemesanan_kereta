<?php 
session_start();
$_SESSION['email'] = $email;
require('database.php');
$query=mysqli_query($connect,"SELECT * FROM akun WHERE email='$email'");
	header("Location: akun.php?target=".$email); ?>