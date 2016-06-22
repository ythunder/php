<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php语句结束符</title>
</head>
<body>
<p>
    <?php

	$sum = 12;
	echo "我饿拉：-（";
	echo "<br/>";

	while($sum < 100) {
		$num = rand(1,20);
		$sum = $sum + $num;
		echo "我还没吃饱呢！";
		echo "<br/>";
	}
	echo "终于吃饱拉^_^";
?>
</p>
</body>
</html>

