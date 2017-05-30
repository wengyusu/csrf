<?php
 require_once "config.php"; 
$adminusername = 'admin';
$password = '6965bbadaa25af2e23816c3d9194301c';
if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username'] == $adminusername && $_POST['password'] == $password){
        $_SESSION['username']='admin';
        $_SESSION['admin'] = 1;
        header('Location:index.php');
    }
    elseif($_POST['username'] == "test" && $_POST['password'] == "test"){
        $_SESSION['username']='test';
        $_SESSION['admin'] = 0;
        header('Location:index.php');
    }
    else{
        die('Fatal error');
    }
}
