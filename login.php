<?php

	session_start();
//全局变量	$_POST接受表单中method为post，$_GET接受表单中method为get的
	require_once('link.php');
	$username=$_POST['username'];
	//trim 清除字符串两边的空格
	//md5 加密算法
	$password=trim(md5($_POST['password']));
//	var_dump($username);
//	var_dump($password);
	alink('localhost','root','960716','alpha');
	$sql = "select * from users where username ='{$username}' and password = '{$password}'";
//	echo $sql;
	$row = mysql_query($sql);
	$resault = mysql_fetch_assoc($row);
	if($row){
		echo"登录成功";
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
	}else{
		echo"登录失败";
	}

?>