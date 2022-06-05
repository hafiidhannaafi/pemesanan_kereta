<?php 
$tipe_id=$_POST['tipe_id'];
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$gender=$_POST['gender'];
$lahir=$_POST['lahir'];
$telpon=$_POST['telpon'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$password=$_POST['password'];

require('database.php');
$queryinput1 = "INSERT INTO akun(email, no_id, tipe_id, no_telpon, nama_lengkap, jenis_kelamin, tanggal_lahir, alamat, sandi) 
VALUES ('$email', '$nik', '$tipe_id', '$telpon', '$nama', '$gender', '$lahir', '$alamat', '$password')";
// var_dump($queryinput1);exit;
$hasilqueryinput1 = mysqli_query($connect,$queryinput1);
// $queryinput2 = "INSERT INTO userlogin(email, sandi) 
// VALUES ('$email', '$password')";
// $hasilqueryinput2 = mysqli_query($connect,$queryinput2);
if($hasilqueryinput1){
    // if($hasilqueryinput2==1){
    header('Location: index.php?target=login');
    } else {echo "data gagal ditambahkan <br/>";}
?>