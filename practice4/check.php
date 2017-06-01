<?php
require_once "config.php";
if(defined("HOST") && defined("SUB_DOMAIN")){
    header("Access-Control-Allow-Origin:http://".SUB_DOMAIN.HOST);
    header("Access-Control-Allow-Credentials:true");
}
else
header("Access-Control-Allow-Origin:*");
// var_dump($_COOKIE);
if(@isset($_FILES["file"]) && $_FILES["file"]["name"]!=""){
    if(isset($_POST['csrf-token'])){
        // echo "\n",$_POST['csrf-token'];
        if ($_FILES["file"]["error"] > 0){
            echo "错误：: " . $_FILES["file"]["error"] . "<br>";
        }
        elseif($_POST['csrf-token'] == $_COOKIE['csrf-token']){
            if(isset($_SESSION['admin3']) && $_SESSION['admin3'])
            echo "flag{c3rf-t0ken-bypa33}";
            else{
                echo "<script>alert('No permission!')</script>";
                // header("Location:upload.php");
            }
        }
        else{
            echo "<script>alert('Don\'t hack me!')</script>";
            // header("Location:upload.php");
        }
    }
    else{
        echo "<script>alert('error')</script>";
        // header("Location:upload.php");
    }
}
else{
      die("No file");
    }
// setcookie('csrf-token', $token,time()+600,  $path,$domain, $secure, $httponly); 