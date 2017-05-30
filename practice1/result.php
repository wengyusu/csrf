<?php
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
// echo "python3 bot.py http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$status=system("python3 bot.py http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}");
if($status == 'succeed')
    echo $content;
else
    echo "Fatal error";
