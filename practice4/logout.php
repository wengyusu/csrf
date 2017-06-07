<?
require_once "config.php";
if(isset($_SESSION['admin4'])){
    session_destroy();
}
header("Location:login.php");