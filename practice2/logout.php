<?
require_once "config.php";
if(isset($_SESSION['admin2'])){
    session_destroy();
}
header("Location:login.php");