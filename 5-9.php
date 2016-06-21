<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php语句结束符</title>
</head>
<body>
<p>
    <?php
	$maxLine = 4;
	$no = 17;
	$line = ceil($no/$maxLine);
	$row = $no%$maxLine ? $no%$maxLine : $maxLine;
	echo "编号<b>".$no."</b>的座位在第<b>".$line."</b>排第<b>".$row."</b>个位置";
?>
</p>
</body>
</html>
