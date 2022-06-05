<?php 
session_start();
//var_dump($_POST);exit;
$email=isset($_POST['email']) ? $_POST['email'] : '';
$_SESSION['email'] = $email;
$nama=isset($_POST['nama']) ? $_POST['nama'] : '';
$lahir=isset($_POST['lahir']) ? $_POST['gender'] : '';
$gender=isset($_POST['gender']) ? $_POST['gender'] : '';
$telpon=isset($_POST['telpon']) ? $_POST['telpon'] : '';
$alamat=isset($_POST['alamat']) ? $_POST['alamat'] : '';
$password=isset($_POST['password']) ? $_POST['password'] : '';

//echo $nama." , ".$gender." , ".$telpon." , ".$alamat." , ".$password;//
require('database.php');
//$target=isset($_POST['target']) ? $_POST['target'] : '';
$queryinput = "UPDATE akun SET nama_lengkap='$nama', jenis_kelamin='$gender', no_telpon='$telpon', alamat='$alamat', sandi='$password' WHERE email='$email'";
$hasilqueryinput = mysqli_query($connect,$queryinput);
if($hasilqueryinput==1){
    header("Location: akun.php?target=".$email);
    } else {echo "data gagal diupdate <br/>". mysqli_error($connect);}
?>