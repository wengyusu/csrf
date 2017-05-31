<?php
 require_once "config.php"; 
$flag='flag{g3t_c3rf3e333}';
if(isset($_FILE)){
    if(isset($_SESSION['admin'])){
        if($_SESSION['admin']){
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

