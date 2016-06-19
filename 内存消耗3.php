<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html: charset=utf-8">
</head>
<body>
<p>
<?php

echo $m1 = memory_get_usage();
echo "<br/>";

$var_string = "123";  //定义字符串类型
echo $m2 = memory_get_usage()-$m1;
echo "<br/>";

$n = 123;
echo $m3 = memory_get_usage()-$m1-$m2;
echo "<br/>";

$f = 123.00;
echo $m4 = memory_get_usage()-$m1-$m2-$m3;
echo "<br/>";

$var_array = array("123");
echo $m5 = memory_get_usage()-$m1-$m2-$m3-$m4;

?>
</p>
</body>
</html>

