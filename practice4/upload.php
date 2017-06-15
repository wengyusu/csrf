<?php

require_once "config.php";


// var_dump($_SESSION);

setcookie('csrf-token', $token,time()+600,  $path,$domain, $secure, $httponly); 
$_COOKIE['csrf-token']=$token;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>子域修改cookie导致CSRF</title>
    <!-- Custom styles for this template -->
    <link href="../assets/css/typo.css" rel="stylesheet">    
    <link href="../assets/css/changeV1.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!--main content start-->
    <section class="container typo">
        <div class="content">
            <nav class="l">
                <ul>
                    <li class="firstNav active"><a href="./index.php">Index</a></li>
                    <!--<details open>-->
                         <!--<summary>Questions</summary>-->
                    <li class="firstNav"><a href="upload.php">Upload</a></li>
                    <li class="firstNav"><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
            <div class="line l"></div>
            <div class="box1 l">
<h3 class="col-md-offset-4">Upload</h3>
<panel class="panel panel-default">
    <form action = "check.php" enctype="multipart/form-data" method="POST">
        <h4>File input(不超过200K)</h4>
        </br>
        <input type="file" name="file" id="file"></br>
      <input type="hidden" name="csrf-token" value="<?=$_COOKIE['csrf-token']?>" >
      </br>
    <button type="submit" class="col-md-offset-4 btn btn-info">提交</button>
</panel>
            </div>
        </div>
         
    </section>

      <!--main content end-->  

      <p class="footer-logo">Powered by <a href="#">TwoSecurity</a></p>
    
  </body>
</html>

