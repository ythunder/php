<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php语句结束符</title>
</head>
<body>
<p>
    <?php
	$p = "";
	define("PI1", 3.14);
	define("PI2", 3.142);
	
	$height = "中";
	if($height == "中") {
		$p = "PI1";
	} else if($height == "低"){
		$p = "PI2";
	}
	$r = 1;
	var_dump($p);
	echo "<br/>";
	$area = constant($p)*$r*$r;
	echo $area;
?>
</p>
</body>
</html>
