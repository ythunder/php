<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php语句结束符</title>
</head>
<body>
<p>
    <?php
	date_default_timezone_set('asia/shanghai');
	$week = date("w");
	$info = "";
	
	if($week == 1) {
		$info = "上午有课";
	} else if($week == 3) {
		$info = "下午没课";
	} else {
		$info = "今天没课";
	}
	echo $info;
?>
</p>
</body>
</html>
