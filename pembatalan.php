<?php 
// koneksi database
require('database.php');
 
// menangkap data id yang di kirim dari url
$kode_tiket=$_GET['kode'];
$email = $_GET['email'];
 
 
// menghapus data dari database
mysqli_query($connect,"delete from pesan_tiket where kode_tiket='$kode_tiket'") or die (mysql_error());
 
// mengalihkan halaman kembali ke index.php
header("location:index.php?target=home&email=".$email);
 
?>