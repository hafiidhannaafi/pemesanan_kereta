<?php
session_start();
$email=isset($_GET['email']) ? $_GET['email'] : '';
$_SESSION['email'] = $email;

$target=isset($_GET['target']) ? $_GET['target'] : '';
$tipe_id=isset($_POST['tipe_id']) ? $_POST['tipe_id'] : '';
$nik=isset($_POST['nik']) ? $_POST['nik'] : '';
$nama=isset($_POST['nama']) ? $_POST['nama'] : '';
$gender=isset($_POST['gender']) ? $_POST['gender'] : '';
$lahir=isset($_POST['lahir']) ? $_POST['lahir'] : '';
$telpon=isset($_POST['telpon']) ? $_POST['telpon'] : '';
$alamat=isset($_POST['alamat']) ? $_POST['alamat'] : '';
$email=isset($_POST['email']) ? $_POST['email'] : '';
$password=isset($_POST['password']) ? $_POST['password'] : '';
?>
<!-- index-->
<!DOCTYPE html>
<html> 
<head>
    <meta charset="UTF-8">
    <title> Kereta Apiku </title>
    <link rel="stylesheet" type="text/css" href="css/daftar.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/fontawesome.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/select2.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/daterangepicker.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>
<body>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">edit</h2>
                    <hr style="height: 1px; background-color:white">
                    <form method="POST" action="redirecteditakun.php">
                        <?php 
                                require('database.php');
                                $hasilselect = mysqli_query($connect,"SELECT * FROM akun WHERE no_ID = '$target'");
                                $hasilrow = mysqli_fetch_array($hasilselect);
                                echo "<div class='row row-space'>
                                        <div class='col-12'>
                                            <div class='input-group'>
                                                <label class='label'>ID Number</label>
                                                <input class='input--style-4' type='text' name='nik' value='".$hasilrow['no_ID']."'readonly>
                                            </div>
                                        </div>
                                </div>
                                    <div class='row row-space'>
                                        <div class='col-12'>
                                            <div class='input-group'>
                                                <label class='label'>Name</label>
                                                <input class='input--style-4' type='text' name='nama' value='".$hasilrow['nama_lengkap']."'>
                                            </div>
                                        </div>
                                        <div class='col-12'>
                                            <div class='input-group'>
                                                <label class='label'>Gender</label>
                                                <div class='p-t-10'>
                                                    <label class='radio-container m-r-45'>Male
                                                        <input type='radio' checked='checked' name='gender' value='Male'>
                                                        <span class='checkmark'></span>
                                                    </label>
                                                    <label class='radio-container'>Female
                                                        <input type='radio' name='gender' value='Female'>
                                                        <span class='checkmark'</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='row row-space'>
                                    <div class='col-12'>
                                        <div class='input-group'>
                                            <label class='label'>Birthday</label>
                                                <div class='input-group-icon'>
                                                    <input class='input--style-4 js-datepicker' type='text' name='lahir' value='".$hasilrow['tanggal_lahir']."'readonly>
                                                    <i class='fas input-icon fa-calendar-alt'></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-12'>
                                            <div class='input-group'>
                                                <label class='label'>Phone Number</label>
                                                <input class='input--style-4' type='text' name='telpon' value='".$hasilrow['no_telpon']."'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-12'>
                                            <div class='input-group'>
                                                <label class='label'>Address</label>
                                                <input class='input--style-4' type='text' name='alamat' value='".$hasilrow['alamat']."'>
                                            </div>
                                        </div>
                                        <div class='col-12'>
                                            <div class='input-group'>
                                                <label class='label'>Email</label>
                                                <input class='input--style-4' type='email' name='email' value='".$hasilrow['email']."' readonly>
                                            </div>
                                        </div>
                                        <div class='col-12'>
                                            <div class='input-group'>
                                                <label class='label'>Password</label>
                                                <input class='input--style-4' type='password' name='password' value='".$hasilrow['sandi']."'>
                                            </div>
                                        </div>
                            <div class='p-t-15'>
                            <button class='btn btn-primary' type='submit' value='submit' name='submit'>Update Data</button>
                            </div>";?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="js/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="js/select2.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
</body>
</html>