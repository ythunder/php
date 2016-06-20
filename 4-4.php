<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php语句结束符</title>
</head>
<body>
<p>
    <?php
	define("PI1", 3.14);
	$p = "PI1";
	$is1 = defined($p);
	$is2 = defined("PI2");
	var_dump($is1);
	var_dump($is2);
?>
</p>
</body>
</html>
