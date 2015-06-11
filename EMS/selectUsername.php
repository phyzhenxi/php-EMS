<?php
require_once 'connect.php';
$username=$_GET['uname'];
$seluname="select username from user where username='$username'";
$result=mysql_query($seluname);
if((mysql_num_rows($result))==0){
	$response='用户名可用';
}else{
	$response='用户名已被占用';
}
echo $response;