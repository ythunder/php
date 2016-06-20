<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php语句结束符</title>
</head>
<body>
<p>
    <?php
	$a = "我在幕课网学习PHP！";
	$b = $a;
	$c = &$a;
	$a = "我天天在幕课网学习PHP！";
	echo $b."<br/>";
	echo $c."<br/>";
?>
</p>
</body>
</html>
