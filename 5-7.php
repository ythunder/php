<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php语句结束符</title>
</head>
<body>
<p>
    <?php
	$a = "张先生";
	$tip = $a.",欢迎您在幕课网学习PHP!";	
	$b = "东边日出西边雨";
	$b .= ",道是无情却有情";
	$c = "东边日出西边雨";
	$c = $c.",道是无情却有情";
	echo $tip."<br/>";
	echo $b."<br/>";
	echo $c."<br/>";

?>
</p>
</body>
</html>
