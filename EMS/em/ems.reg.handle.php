<?php
	session_start();
	require_once '../connect.php';
	$username=$_POST['username'];
	$name=$_POST['name'];
	$password=$_POST['pwd'];
	$sex=$_POST['sex'];
	$number='';
	$seluname="select username from user where username=$username";
	$regsql="insert into user (username,name,password,sex) values ('$username','$name',
	'$password','$sex');";
	$result=mysql_query($seluname);
	if(isset($_POST["number"])){
		$number=$_POST['number'];
	}
	if($number!=$_SESSION["number"]){
		echo "<script>alert('error:验证码输入错误');window.location.href='regist.php';</script>";
		return;
	}
	if((mysql_num_rows($result))==0){
		echo "<script>alert('error:用户名已被使用');window.location.href='regist.php';</script>";
		return;
	}
	if(mysql_query($regsql)){
		echo "<script>alert('success:管理员注册成功');window.location.href='emplist.php';</script>";
		}else {
			echo "<script>alert('error:管理员注册失败');window.location.href='regist.php';</script>";
		}
