<?php
$domain="";
require_once "config.php";
// ini_set("session.cookie_httponly", 1); 
function generate_password( $length = 12 ) { 
// 密码字符集，可任意添加你需要的字符 
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; 
$password = ''; 
for ( $i = 0; $i < $length; $i++ ) 
{ 
$password .= $chars[ mt_rand(0, strlen($chars) - 1) ]; 
} 
return $password; 
}
$token=generate_password();
if(defined("MAIN_DOMAIN") && defined("HOST"))
$domain=MAIN_DOMAIN.HOST;

$path='/';
$secure=false;
$httponly=true;
// $_COOKIE['csrf-token']=$token;
if(!isset($_COOKIE['csrf-token'])){
  setcookie('csrf-token', $token,time()+600,  $path,$domain, $secure, $httponly); 
}

// var_dump($_SESSION);
$html='
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="//cdn.bootcss.com/jquery/3.2.0/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Upload</title>
</head>
<body>
     <a class="btn btn-default col-md-offset-10" href="logout.php">logout</a>
    <div class="container" style="margin-top:15%;width:600px;">

<h3 class="col-md-offset-4">Upload</h3>
<div class="panel panel-default" style="margin:300 auto;width:600px;">
  <div class="panel-body">
    <form role="form" action = "" enctype="multipart/form-data" method="POST">
      <div class="form-group col-md-offset-4 ">
        <label for="exampleInputFile">File input(不超过200K)</label>
        <input type="file" name="file" id="file"><br>
      </div>
      <input type="hidden" name="csrf-token" value="'.$_COOKIE['csrf-token'].'" >
    <button type="submit" class="col-md-offset-4 btn btn-info">提交</button>
</div>
</body>
</html>';
if(defined("HOST") && defined("SUB_DOMAIN")){
    header("Access-Control-Allow-Origin:http://".SUB_DOMAIN.HOST);
    header("Access-Control-Allow-Credentials:true");
}
else
header("Access-Control-Allow-Origin:*");

//setcookie("csrf-token","",time()-3600);
//$token=generate_password();

// session_start();
if(@isset($_FILES["file"]) ){
    if(isset($_POST['csrf-token']) && $_POST['csrf-token']==$_COOKIE['csrf-token'] && @isset($_SESSION['username']) && @$_SESSION['username']=="admin"){
    if ($_FILES["file"]["error"] > 0){
        echo "错误：: " . $_FILES["file"]["error"] . "<br>";
    }
    else{
        echo "CNSS{csrf_t0ken_bypa33}";
    }
    }
    elseif ($_POST['csrf-token']!=$_COOKIE['csrf-token']) {
        echo $html;
        echo "<script>alert('error')</script>";
    }
    else{
        echo $html;
        echo "<script>alert('No permission')</script>";
        }
}
else{
        echo $html;
    }

