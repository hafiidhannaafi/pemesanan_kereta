<?php 
session_start();
$_SESSION['email'] = $email;
$email=isset($_GET['email']) ? $_GET['email'] : '';
?>
<!-- Menu/ navbar-->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
<div class="container">
<a class="navbar-brand" href="#"><img src="img/logo.png" height="60px" width="80px"></a>    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?php 
                echo "index.php?target=home&email=".$email ?>">Home </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php 
                echo "index.php?target=promosi&email=".$email ?>"> Promotion </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php 
                echo "index.php?target=faq&email=".$email ?>"> FAQ </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-user-circle"></i>
            </a><?php ?>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php 
                echo "index.php?target=akun&email=".$email ?>">My Account</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </ul>
    </div>
</div>
</nav>
