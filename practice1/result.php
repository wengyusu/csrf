<?php
require_once "config.php";
if(!isset($_GET['url']))
    die('Error');

$url=$_GET['url'];

$content = "<html>
<head>
<title>Result Page</title>
</head>
<body>
    <p>{$url}</p>
</body>
</html>
";
// $filename=md5(time());

// file_put_contents('result/'.$filename.'.html',$content);
// $status=system("python bot.py {$filename}.html");
// if($status == 'succeed'){
//     header("Location:result/{$filename}.html");
// }
// else
//     echo "fatal error";
$filename="result/".md5(time()).".html";
file_put_contents($filename,$content);
$dir=dirname($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
// echo "python3 bot.py http://{$dir} {$filename}";
exec("python3 bot.py http://{$dir} {$filename}",$status);
if($status[0] == 'succeed'){
    echo $content;
    unlink($filename);
}
else
    die("Fatal error");
