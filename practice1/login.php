<?php
if(isset($_SESSION['admin']))
    header("Location:index.php");
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
                    <li class="firstNav active"><a href="./index.php">Login</a></li>
                    <!--<details open>-->
                         <!--<summary>Questions</summary>-->
                </ul>
            </nav>
            <div class="line l"></div>
            <div class="box1 l">
<panel class="panel panel-default">
    <form action ="confirm.php" method="POST">
        <h4>Login</h4>
        </br>
        Username:<input type="text" name="username" value="test">
      </br>
      </br>
      Password: <input type="password" name="password" value="test"></br>
    <button type="submit" class="col-md-offset-4 btn btn-info" style="margin-left:15%;">提交</button>
</panel>
            </div>
        </div>
         
    </section>

      <!--main content end-->  

      <p class="footer-logo">Powered by <a href="#">TwoSecurity</a></p>
    
  </body>
</html>