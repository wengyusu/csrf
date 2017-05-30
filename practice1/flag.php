<?php
 require_once "config.php"; 
$flag='flag{g3t_c3rf3e333}';
if(isset($_SESSION['admin'])){
    if($_SESSION['admin']){
        echo $flag;
    }
}
else{
    echo "No permission";
}
