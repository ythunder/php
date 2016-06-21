<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php语句结束符</title>
</head>
<body>
<p>
    <?php
	$shoesPrice = 49;
	$shoesNum = 1;
	$shoesMoney = $shoesPrice * $shoesNum;

	$shirtPrice = 99;
	$shirtNum = 2;
	$shirtMoney = $shirtPrice * $shirtNum;

	$orderMoney = $shoesMoney + $shirtMoney;
	
	echo $orderMoney;

?>
</p>
</body>
</html>
