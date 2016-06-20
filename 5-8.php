<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php语句结束符</title>
</head>
<body>
<p>
    <?php
$conn = @mysql_connect("localhost","username","password" );
echo "出错了，出错原因：".$php_errormsg;
?>
</p>
</body>
</html>
