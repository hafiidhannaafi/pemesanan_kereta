<?php 
if(isset($submit)){
$tipe_id=$_POST['tipe_id'];
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$gender=$_POST['gender'];
$lahir=$_POST['lahir'];
$telpon=$_POST['telpon'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$password=$_POST['password'];}
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
                    <h2 class="title">Registration Form</h2>
                    <hr style="height: 1px; background-color:white">
                    <form method="POST" action="redirectdaftar.php">
                        <div class="row row-space">
                                <div class="col-4">
                                    <div class="input-group">
                                        <label class="label">ID Type</label>
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="tipe_id">
                                                <option disabled="disabled" selected="selected">Choose option</option>
                                                <option value="KTP">KTP/KK</option>
                                                <option value="SIM">SIM</option>
                                                <option value="passport">Passport</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label">ID Number</label>
                                        <input class="input--style-4" type="text" name="nik">
                                    </div>
                                </div>
                        </div>
                            <div class="row row-space">
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label">Name</label>
                                        <input class="input--style-4" type="text" name="nama">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label">Gender</label>
                                        <div class="p-t-10">
                                            <label class="radio-container m-r-45">Male
                                                <input type="radio" checked="checked" name="gender" value="Male">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Female
                                                <input type="radio" name="gender" value="Female">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label">Birthday</label>
                                        <div class="input-group-icon">
                                            <input class="input--style-4 js-datepicker" type="text" name="lahir">
                                            <i class="fas input-icon fa-calendar-alt"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label">Phone Number</label>
                                        <input class="input--style-4" type="text" name="telpon">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                            <div class="col-12">
                                    <div class="input-group">
                                        <label class="label">Address</label>
                                        <input class="input--style-4" type="text" name="alamat">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label">Email</label>
                                        <input class="input--style-4" type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <label class="label">Password</label>
                                        <input class="input--style-4" type="password" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                            <div class="p-t-10">
                                <label class="radio-container"> Dengan mendaftar ini saya setuju dengan <a href="#" style="color: black;">Kebijakan privasi dan syarat & ketentuan</a> Kereta Apiku
                                <input type="radio" checked="checked"> <span class="checkmark"></span></label>
                                </div>
                            </div>
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" type="submit" value="submit">Submit</button>
                            </div>
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