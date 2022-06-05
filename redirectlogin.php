<?php
include 'database.php';
$email = (htmlentities($_POST['email']));
$password = (htmlentities($_POST['password']));
if( isset($_POST['login']) ){

	if( !isset($_POST['email']) || !isset($_POST['password']) ) {
		echo "Please fill all the fields!";
	}}
$query    = "SELECT * FROM akun WHERE email = '$email' AND sandi = '$password'";
$runquery = $connect->query($query);

if($runquery && $runquery->num_rows > 0){
	session_start();
    $_SESSION['email'] = $email;
	header("Location: akun.php?target=".$email);
} else {
	echo '<h1>Email atau Kata Sandi Salah!</h1>';
}

?>