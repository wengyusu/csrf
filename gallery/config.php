<?php
define("HOST",".w2nd.me");
define("MAIN_DOMAIN","ctf");
define("SUB_DOMAIN","gallery");
define("MAIN_URL","http://".MAIN_DOMAIN.HOST."/csrf/practice3/confirm.php");
ini_set("session.cookie_httponly", 1); 
ini_set("session.cookie_domain",HOST); 
if(isset($_COOKIE['PHPSESSID']))
session_id($_COOKIE['PHPSESSID']);
session_start();