<?php
 require_once "config.php"; 
$flag='flag{p03t_c3rf3e333}';
if(@isset($_FILES)){
    if(isset($_SESSION['admin2'])){
        if($_SESSION['admin2']){
            echo $flag;
        }
    }
    else{
        echo "No permission";
    }
}
else{
    die("Please post me a file");;
}

