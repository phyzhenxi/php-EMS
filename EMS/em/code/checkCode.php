<?php
session_start();
$number='';
if(isset($_GET['code'])){
	$number=$_GET['code'];
}
if($number!=$_SESSION["number"]){
 $response='1';
}else {
	$response='0';
}
echo $response;