<?php

	session_start();
//全局变量	$_POST接受表单中method为post，$_GET接受表单中method为get的
	require_once('link.php');
	$username=$_POST['username'];
	//trim 清除字符串两边的空格
	//md5 加密算法
	$password=trim(md5($_POST['password']));
	$password2=trim(md5($_POST['password2']));
	if($password==$password2){
//	var_dump($username);
//	var_dump($password);
	alink('localhost','root','960716','alpha');
	$sql = "insert into users (username,password) values ('$username','$password')";
//	echo $sql;
	$row = mysql_query($sql);
	//$resault = mysql_fetch_assoc($row);
	if($row){
		echo"注册成功";
		//header('Refresh:3 ;url:http://localhost/alpha/login.html');
		//echo "<script>window.location.href='http://localhost/alpha/login.html';</script>";
		echo "<meta http-equiv='refresh' content='1; http://localhost/alpha/login.html'>";
	}else{
		echo"注册失败";
	}
	}

?>