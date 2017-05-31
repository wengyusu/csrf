<?php
// require_once('config.php');
if(isset($_COOKIE['PHPSESSID']))
session_id($_COOKIE['PHPSESSID']);
session_start();
$target="index.html";
if(isset($_GET['t'])){
    $target=$_GET['t'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>跳转中...</title>
</head>
<body>
    跳转中...
</body>
<script>

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms))
}
async function wait(){
    await sleep(100);
}
var URL = '<?=$target?>';

window.location.href=URL;
</script>
</html>