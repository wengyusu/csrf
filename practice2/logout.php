<?php
require_once "config.php";
if(isset($_SESSION['username'])){
    session_destroy(); 
    header("Location:index.php");
}