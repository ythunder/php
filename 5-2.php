<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php语句结束符</title>
</head>
<body>
<p>
    <?php


$sh = 110; //英语成绩
$math= 118; //数学成绩
$biological = 80; //生物成绩
$physical = 90; //物理成绩

$sum = $sh + $math + $biological + $physical;
$avg = $sum / 4;
$x = $math - $sh;
$x2 = $sh * $sh;

echo "总分:".$sum."<br />";
echo "平均分:".$avg."<br />";
echo "数学比英语高的分数:".$x."<br />";
echo "英语成绩的平方:".$x2."<br />";
?>
</p>
</body>
</html>
