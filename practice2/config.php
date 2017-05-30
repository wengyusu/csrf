<?php
ini_set("session.cookie_httponly", 1);
// echo $_SERVER['SCRIPT_NAME']=="/csrf/practice2/login.php"; 
// assert(isset($_SESSION['username']),"no login");
session_start();
 if(!isset($_SESSION['username']) && $_SERVER['SCRIPT_NAME'] != "/csrf/practice2/login.php"){
    header("Location:login.php");
}

