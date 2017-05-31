<?php
define("HOST",".w2nd.me");
define("MAIN_DOMAIN","ctf");
define("SUB_DOMAIN","gallery");
ini_set("session.cookie_httponly", 1); 
if(defined("HOST"))
ini_set("session.cookie_domain",HOST);
if(isset($_COOKIE['PHPSESSID']))
session_id($_COOKIE['PHPSESSID']);
session_start();

