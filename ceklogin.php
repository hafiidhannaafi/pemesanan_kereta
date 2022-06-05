<?php
$usernamelogin=$_POST['usernamelogin'];
$passwordlogin=$_POST['passwordlogin'];

require('database.php');
if(!empty($usernamelogin) && !empty($passwordlogin)){$hasilselect = mysqli_query($koneksi1,"SELECT * FROM `login` WHERE username='.$usernamelogin.' AND password='.$passwordlogin.'");
    $row= mysqli_fetch_array($hasilselect);

    $valid_user = $row['username'];
    $valid_pass = $row['password'];}
        
    if($usernamelogin==$valid_user && $passwordlogin==$valid_pass){
        $_SESSION['login'] = true;
        $_SESSION['username'] = $valid_user;
        $_SESSION['password'] = $valid_pass;
        header('Location: index.php?target=home');}
    else{
        header('Location: index.php?target=daftar');
    }
        ?>