<?php
header("Content-type:text/html;charset=utf-8");
//echo 一次输出多个字符串，多个值之间用逗号分开，
//不能作为表达式的一部分
$arr=Array('A','B',1,true);
echo $arr;
echo '<br/><br/>';

//print() 打印一个值(参数),如果成功则返回1，
print $arr;
echo '<br/><br/>';

//print_r() 打印关于变量的易于理解的信息，
//把字符串和数字简单打印出来，打印boolean和null无异议，
//结果都为'\n'

print_r($arr);
echo '<br/><br/>';

//var_dump() 判断一个变量类型与长度，并出书变量的数值，
var_dump($arr);
echo '<br/><br/>';