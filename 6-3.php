<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php语句结束符</title>
</head>
<body>
<p>
    <?php
	$totalMoney = 0;
	$basicMoney = 2000;
	$sex = "男";

	if($sex == "男") {
		$totalMoney = $basicMoney + 0;
	} else if($sex == "女") {
		$totalMoney = $basicMoney + 300;
	}
	echo $totalMoney;

?>
</p>
</body>
</html>
