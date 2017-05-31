<?php
foreach ($_REQUEST as $value){
    file_put_contents('payload.txt',$value."\n",FILE_APPEND);
}