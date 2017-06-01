<?php

require_once "config.php";


// var_dump($_SESSION);

setcookie('csrf-token', $token,time()+600,  $path,$domain, $secure, $httponly); 
$_COOKIE['csrf-token']=$token;
?>
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
<div class="panel panel-default" style="width:600px;">
  <div class="panel-body">
    <form role="form" action = "check.php" enctype="multipart/form-data" method="POST">
      <div class="form-group col-md-offset-4 ">
        <label for="exampleInputFile">File input(不超过200K)</label>
        <input type="file" name="file" id="file"><br>
      </div>
      <input type="hidden" name="csrf-token" value="<?=$_COOKIE['csrf-token']?>" >
    <button type="submit" class="col-md-offset-4 btn btn-info">提交</button>
</div>
</body>
</html>
