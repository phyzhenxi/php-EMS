<?php
	require_once 'connect.php';
	$id=$_GET['id'];
	$delsql="delete from emp where id=$id";
	if(mysql_query($delsql)){
		echo "<script>alert('success:删除成功');window.location.href='emplist.php';</script>";
	}else{
		echo "<script>alert('error:删除失败');window.location.href='emplist.php';</script>";
	}