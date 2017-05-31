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
// ini_set("session.cookie_httponly", 1); 
function generate_password( $length = 12 ) { 
// 密码字符集，可任意添加你需要的字符 
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; 
$password = ''; 
for ( $i = 0; $i < $length; $i++ ) 
{ 
$password .= $chars[ mt_rand(0, strlen($chars) - 1) ]; 
} 
return $password; 
}
$token=generate_password();
if(defined("MAIN_DOMAIN") && defined("HOST"))
$domain=MAIN_DOMAIN.HOST;

$path='/';
$secure=false;
$httponly=true;
if(!isset($_COOKIE['csrf-token'])){
    $_COOKIE['csrf-token']=$token;
  setcookie('csrf-token', $token,time()+600,  $path,$domain, $secure, $httponly); 
}


