<?php 
session_start();
$email=isset($_GET['email']) ? $_GET['email'] : '';
$_SESSION['email'] = $email;

$jawaban=isset($_POST['jawaban']) ? $_POST['jawaban'] : '';
$pertanyaan=isset($_POST['pertanyaan']) ? $_POST['pertanyaan'] : '';
?>
<!-- navbar(login)-->
<!DOCTYPE html>
<html> 
<head>
    <title> Kereta Apiku </title>
    <link rel="stylesheet" type="text/css" href="css/keretaapi.css">
</head>
<body>
<div id="login-box">
<div class="panel-group" id="accordion">
        <div class="faqHeader">Frequently Asked Question</div><br/>
        <?php
            require("database.php");
            $hasilselect = mysqli_query($connect,"SELECT * FROM informasi");
            if($hasilselect === false){
                throw new Exception(mysqli_error($connect));
            }
            $b = mysqli_num_rows($hasilselect);
            if($b){
                while($row = mysqli_fetch_array($hasilselect)){
                echo "
                <div class='panel panel-default'>
                    <div class='panel-heading'>
                        <p class='panel-title'>
                            <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion' href='#collapseOne'>".$row['pertanyaan']."</a>
                        </p>
                    </div>
                    <div id='collapseOne' class='panel-collapse collapse in'>
                        <div class='panel-body'>
                            ".$row['jawaban']." 
                        </div>
                    </div>
                </div><br/>
                ";
            }}
        ?></div></div>
</body>
</html>