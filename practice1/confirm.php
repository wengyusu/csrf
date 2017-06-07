<?php
 require_once "config.php"; 
$username = 'admin';
$password = '6965bbadaa25af2e23816c3d9194301c';
if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username'] == $username && $_POST['password'] == $password){
        $_SESSION['admin'] = 1;
        header('Location:index.php');
    }
    elseif($_POST['username'] =="test" && $_POST['password'] == "test"){
        $_SESSION['admin'] = 0;
        header('Location:index.php');
    }
    else{
        echo "帐户或密码不正确";
        sleep(2);
        header("Location:login.php");
    }
}