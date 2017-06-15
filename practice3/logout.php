<?php
require_once "config.php";
if(isset($_SESSION['admin3'])){
    session_destroy();
}
header("Location:login.php");