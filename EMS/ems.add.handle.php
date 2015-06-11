<?php
	require_once 'connect.php';
	//把传递过来的信息入库，在入库之前对所有的信息进行校验
	if (!(isset($_POST['name'])&&(!empty($_POST['name'])))){
		echo "<script>alert('名字不能为空');window.location.href='addEmp.php';</script>";
	}
	$name=$_POST['name'];
	$salary=$_POST['salary'];
	$age=$_POST['age'];
	$insertsql="insert into emp (name,salary,age) values('$name',$salary,$age);";
	if(mysql_query($insertsql)){
		echo "<script>alert('success:员工添加成功');window.location.href='emplist.php';</script>";
	}else {
		echo "<script>alert('error:员工添加失败');window.location.href='addEmp.php';</script>";
	}