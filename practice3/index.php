<?php require_once "config.php";
 if(!isset($_SESSION['admin3'])){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CORS CSRF</title>
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
                <h1 class="text-left mt0">CORS CSRF</h1>
            </div>
        </div>
         
    </section>

      <!--main content end-->  

      <p class="footer-logo">Powered by <a href="#">TwoSecurity</a></p>
    
  </body>
</html>
