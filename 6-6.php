<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php语句结束符</title>
</head>
<body>
<p>
    <?php

	$num = rand(1,4);
	$info = "";

	switch($num) {
		case 1:
			$info = "恭喜你！中了一等奖！";
			break;
		case 2:
			$info = "恭喜你！中了二等奖！";
			break;
		case 3:
			$info = "恭喜你！中了三等奖！";
			break;
		default:
			$info = "很遗憾！你没有中奖！";

	}
	echo $info;
?>
</p>
</body>
</html>
