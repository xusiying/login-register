<?php
/*
	creat database alpha;
	set name utf8;
	use alpha;
	create table users(id int not NULL primary key auto_increment,username varchar(255) not NULL,password char(64) not NULL)
*/
	function alink($host,$user,$password,$db)
	{
		$links =mysql_connect($host,$user,$password);
		mysql_query('set names utf8');
		if(!$links){
			die("数据库连接失败".mysql_error());
		}
		else{
			echo  "数据库连接成功";
		}
		
		$r = mysql_select_db($db,$links);
		return $r;
	}
?>