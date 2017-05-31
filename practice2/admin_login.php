<?php  require_once "config.php";  ?>
<html>
      <head>
      <title>Login</title>
        <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="../assets/js/jquery.min.js"></script>
        <link href="../assets/css/bootstrap.css" rel="stylesheet">
        <script src="../assets/js/bootstrap.min.js"></script>
      </head>
      <body>
<div class="container" style="margin-top:15%;width:600px;">
<h3>Login</h3>
<form action="confirm.php" method="POST">
  <div>
    <label for="exampleInputName2">Username:</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div>
    <label for="exampleInputName2">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button class="btn btn-default">Sign in</button>
  </form>
</div>
      </body>
      </html>