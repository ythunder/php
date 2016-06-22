<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php语句结束符</title>
</head>
<body>
<p>
    <?php

$num = 2;
$sum = 10;
while($num>3){
	$sum = $sum + 10;
}
echo "A例子的结果是".$sum."<br/>";

$num = 2;
$sum = 10;
do{
	$sum = $sum + 10;
}while($num>3);
echo "B例子的结果是".$sum."<br/>";
?>
</p>
</body>
</html>

