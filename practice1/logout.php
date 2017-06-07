<?
require_once "config.php";
if(isset($_SESSION['admin'])){
    session_destroy();
}
header("Location:login.php");