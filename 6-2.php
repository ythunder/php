<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php语句结束符</title>
</head>
<body>
<p>
    <?php
	date_default_timezone_set('Asia/ShangHai');
	$today = date('m-d', time());  //获取当天时间
	$birthday = "02-14";
	$money = 238;
	$discount = 0.8;

	if($today == $birthday) {
		$money = $money * $discount;
	}else{
		$money = $money * 1;
	}
	echo $money;

?>
</p>
</body>
</html>
