<?php
header("Content-type:text/html;charset=utf-8");
//永久转换变量
$num1=1.1; //float
var_dump($num1);
echo '<br/><br/>';
settype($num1, 'boolean');
var_dump($num1); //float      boolean

echo '<br/><br/><br/><br/><br/>';
$num1=0.1; //再次对变量赋值强制转换
var_dump($num1);
if($num1==true){
	echo '不开心<br/><br/>';
}else {
	echo '很开心<br/><br/>';
}







//临时转换变量
$num2=9.9; //雪碧
$str='1'; //橙汁
$result=intval($str)+(int)$num2;
var_dump($result);
echo '<br/>';
var_dump($num2);
echo '<br/>';
var_dump($str);
echo '<br/>';