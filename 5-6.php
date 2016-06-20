<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php语句结束符</title>
</head>
<body>
<p>
    <?php
	
	$a = TRUE;
	$b = TRUE;
	$c = FALSE;
	$d = FALSE;

	echo ($a and $b) ? "通过":"不通过";
	echo "<br/>";
	echo ($a or $c) ? "通过":"不通过";
	echo "<br/>";
	echo ($a xor $c xor $d)? "通过":"不通过";
	echo "<br/>";
	echo !$c? "通过":"不通过";
	echo "<br/>";
	echo $a && $d ?"通过":"不通过";
	echo "<br/>";
	echo $a || $c || $d ? "通过":"不通过";

?>
</p>
</body>
</html>
