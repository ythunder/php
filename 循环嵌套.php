<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php语句结束符</title>
</head>
<body>
<p>
    <?php
<?php
 $students = array(
'2010'=>array('令狐冲',"59"),
'2011'=>array('林平之',"44"),
'2012'=>array('曲洋',"89"),
'2013'=>array('任盈盈',"92"),
'2014'=>array('向问天',"93"),
'2015'=>array('任我行',"87"),
'2016'=>array('冲虚',"58"),
'2017'=>array('方正',"74"),
'2018'=>array('岳不群',"91"),
'2019'=>array('宁中则',"90"),
);//10个学生的学号、姓名、分数，用数组存储
 
foreach($students as $key=>$val)
{ //使用循环结构遍历数组,获取学号 
     echo $key; //输出学号
	 echo ":";
	 //循环输出姓名和分数
foreach($val as $v)
	{
		echo $v; 
	 }
	 echo "<br />";
}
?>
?>
</p>
</body>
</html>

