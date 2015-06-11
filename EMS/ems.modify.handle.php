<?php
	require_once 'connect.php';
	$id=$_POST['id'];
	$name=$_POST['name'];
	$salary=$_POST['salary'];
	$age=$_POST['age'];
	$updatesql="update emp set name='$name',salary=$salary,age=$age where id=$id";
	if(mysql_query($updatesql)){
		echo "<script>alert('success:修改成功');window.location.href='emplist.php';</script>";
		}else{
			echo "<script>alert('error:修改失败');window.location.href='updateEmp.php';</script>";
		}