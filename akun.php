<?php
session_start();
$email=isset($_GET['email']) ? $_GET['email'] : '';
$_SESSION['email'] = $email;
if(!isset($_SESSION['email'])) {
    header("Location: index.php?access_denied");
};

?>
<!-- navbar(login)-->
<!DOCTYPE html>
<html> 
<head>
    <title> Kereta Apiku </title>
    <link rel="stylesheet" type="text/css" href="css/keretaapi.css">
    <link rel="stylesheet" href="css/keretaapi.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Josefin+Sans:wght@600&family=Monoton&display=swap" rel="stylesheet"> 
    <script src="js/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://kit.fontawesome.com/a39751e2e8.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body style="background: none;">
    <div id="login-box">
            <?php
            require('database.php');
            $target=isset($_GET['target']) ? $_GET['target'] : '';
            $hasilselect = mysqli_query($connect,"SELECT * FROM akun where email = '$target'");
            // var_dump($target);exit;
            if($hasilselect === false){
                throw new Exception(mysqli_error($connect));}
                while($hasilrow = mysqli_fetch_array($hasilselect)){
                    // var_dump($hasilrow);exit;
                $email;
                echo "<div class='right'>
                        <h1 style='text-align: center; font-family: 'Caveat', cursive;'> Hello!</h1>
                            <p class='kecil'> ID Number : <span style='font-family: 'Roboto', sans-serif; font-size: 16px'></span>".$hasilrow['no_ID']."</p><br/>
                            <p class='kecil'> Name : <span style='font-family: 'Roboto', sans-serif; font-size: 16px'></span>".$hasilrow['nama_lengkap']."</p><br/>
                            <p class='kecil'> Gender : <span style='font-family: 'Roboto', sans-serif; font-size: 16px'></span>".$hasilrow['jenis_kelamin']."</p><br/>
                            <p class='kecil'> Birthday Date : <span style='font-family: 'Roboto', sans-serif; font-size: 16px'></span>".$hasilrow['tanggal_lahir']."</p><br/>
                            <p class='kecil'> Phone Number : <span style='font-family: 'Roboto', sans-serif; font-size: 16px'></span>".$hasilrow['no_telpon']."</p><br/>
                            <p class='kecil'> E-mail : <span style='font-family: 'Roboto', sans-serif; font-size: 16px'></span>".$hasilrow['email']."</p><br/>
                            <a class='button button-xs button-secondary button-nina' type='submit' value='edit' name='edit' href='editakun.php?target=".$hasilrow['no_ID']."' role='button'>EDIT AKUN</a>
                            <a class='button button-xs button-secondary button-nina' type='submit' value='edit' name='edit' href='logout.php' role='button'>LOGOUT</a>
                    </div>
                    <div class='left2'>"; if($hasilrow['jenis_kelamin']==='Male'){echo "<img src='css/img/cowo.png'>";}else{echo "<img src='css/img/cewe.png'>";} 
                    echo "</div>
                    </div>
                    <center><a class='button button-xs button-secondary button-nina' target='_blank' type='submit' value='pesan' name='pesan' href='index.php?target=home&email=".$hasilrow['email']."' role='button'>pesan tiket</a> 
                    <br/><a class='button button-xs button-secondary button-nina' target='_blank' type='submit' value='pesan' name='riwayat' href='riwayat.php?email=".$hasilrow['email']."' role='button'>Riwayat Pesan</a><center>"
    ;} ?></body>
</html>