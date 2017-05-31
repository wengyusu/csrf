<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GET CSRF</title>
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
                </ul>
            </nav>
            <div class="line l"></div>
            <div class="box1 l">
                <h1 class="text-left mt0">GET CSRF </h1>
                <h3>Only the man who is admin can do something...</h3>
                </br>
                <h3>Input the content and admin will see:</h3>
                <form action="result.php">
                <textarea name="url" style="width:300px;height:100px;"></textarea>
                 <input type="submit" value="submit">
                </form>
            </div>
        </div>
         
    </section>

      <!--main content end-->  

      <p class="footer-logo">Powered by <a href="#">TwoSecurity</a></p>
    
  </body>
</html>
<!--flag.php-->
