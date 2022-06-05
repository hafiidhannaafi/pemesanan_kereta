<?php 
session_start();
//var_dump($_POST);exit;
$email=isset($_POST['email']) ? $_POST['email'] : '';
$_SESSION['email'] = $email;
?>
<!-- index-->
<!DOCTYPE html>
<html> 
<head>
    <title> Kereta Apiku </title>
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
<body>

<?php
   require('menu.php');
?>

<section>
   <?php
        if(isset($_GET['target']))
        {
        echo $_GET['target'],"</br>";
        if($_GET['target']=='home')
        {
            require('home.php');
        }elseif($_GET['target']=='promosi')
        {
            require('promosi.php');
        }elseif($_GET['target']=='faq')
        {
            require('faq.php');
        }elseif($_GET['target']=='login')
        {
            require('login.php');
        }elseif($_GET['target']=='daftar')
        {
            require('daftar.php');
        }elseif($_GET['target']=='akun')
        {
            require('redirectakun.php');
        }elseif($_GET['target']=='admin')
        {
            require('adminlogin.php');
        }else
        {echo" Halaman tidak ditemukan </br>";}
        }else
        {
        require('login.php');
        }
?>
</section>

<!-- Footer Minimal-->
<footer class="section page-footer page-footer-minimal novi-background bg-cover text-center bg-gray-darker">
        <div class="container container-wide">
        <div class="row row-fix justify-content-sm-center align-items-md-center row-30">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
    </a><br><br>
		<div class="gtco-container">
			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2020 All Rights Reserved.</small> 
						<small class="block">Designed by M31180 Jos Adrian | M3119031 Dimas Abian I. | 
                            M3119034 Elang M. Fikhri | M3119042 Gita Zandria R. K. | M3119045 Hafiidh Annaafi S<br/> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
            <small class="block">
                  <span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-phone"></span><a href="#">0818348390498</a>&nbsp;
                  <span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-map-marker"></span><a href="#">2130 Fulton Street, San Diego, CA 94117-1080 USA</a>&nbsp;
                  <span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-email"></span><a href="mailto:#">mail@demolink.org</a>
            </small> 
					</p>
				</div>
			</div>
		</div>
        </div>
        </div>
    <div class="rd-navbar-top-panel-inner">
                <ul class="list-inline">
                  <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                  <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                  <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                  <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                  <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                </ul>
              </div>
              </div>
      </footer>
      
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"> </div>
    <!-- Javascript-->
    
    <script src="js/script.js"></script>
    <!-- coded by barber-->
</body>
</html>