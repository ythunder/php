<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php语句结束符</title>
</head>
<body>
<p>
    <?php
	$a = 1;
	$b = "1";
	var_dump($a == $b);
	echo "<br/>";
	var_dump($a === $b);
	echo "<br/>";
	var_dump($a != $b);
	echo "<br/>";
	var_dump($a <> $b);
	echo "<br/>";
	var_dump($a !== $b);
	echo "<br/>";
	var_dump($a < $b);
	echo "<br/>";

	$c = 5;
	var_dump($a < $c);
	echo "<br/>";
	var_dump($a > $c);
	echo "<br/>";
	var_dump($a <= $c);
	echo "<br/>";
	var_dump($a >= $c);
	echo "<br/>";
	var_dump($a >= $b);
	echo "<br/>";

?>
</p>
</body>
</html>
