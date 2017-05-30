<?php
foreach ($_REQUEST as $value){
    file_put_contents('payload.txt\n',$value,FILE_APPEND);
}