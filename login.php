<?php 
// if(isset($_POST)){
//     $email=$_POST['email'];
//     $password=$_POST['password'];
// }
?>
<!-- navbar(login)-->
<!DOCTYPE html>
<html> 
<head>
    <title> Kereta Apiku </title>
    <link rel="stylesheet" type="text/css" href="css/keretaapi.css">
</head>
<body style="background: none;">
    <div id="login-box">
        <div class="right">
            <br/><br/>
            <h1 style="text-align: center; font-family: 'Caveat', cursive;"> Welcome Back! </h1><br/>
            <form action="redirectlogin.php" method="POST">
            <div class="form-row"> 
                <div class="col-md-12 mb-3">
                    <label for="exampleInputEmail1">Alamat E-mail</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" required>
                </div>
            </div>
            <div class="form-row"> 
                <div class="col-md-12 mb-3">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                </div>
            </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ingat saya!</label>
                </div>
                <button class="btn btn-primary" value='login'>Login </button>
            </form>
            <p class="kecil"> Belum memliki akun? <a href="index.php?target=daftar" style="color: white;"> Buat Akun </a></p><br/>
            <br/><br/><br/><br/>
            <p class="kecil" style="text-align: right;"> Admin <a href="adminlogin.php" style="color:#3347ff;"> Login </a></p>
        </div>
        <div class="left1">
        </div>
    </div>
    </body>
</html>