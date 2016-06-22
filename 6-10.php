<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php语句结束符</title>
</head>
<body>
<p>
    <?php

$sum = 0;
$num = rand(1,6);
$sum = $sum + $num;
while($num == 6){
	$num = rand(1,6);
	$sum = $sum + $num;
};
echo "while例子执行完毕，前进:".$sum."<br/>";

$sum = 0;
do{
	$num =rand(1,6);
	$sum = $sum + $num;
}while($num==6);

echo "do..while例子执行完毕，前进：".$sum."<br/>";
?>
</p>
</body>
</html>

