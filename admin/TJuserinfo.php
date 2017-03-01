<?php
	include "../public/session.php";
	include "../public/db.php";
	$username=$_POST["username"];
	$password=md5($_POST["password"]);
	if($username==""||$password==""){
		$message="添加失败";
		$n="添加用户页";
		$url="TJuser.php";
		include "message.html";
	}else{
		$sql="insert into user (username,password,rote) values ('$username','$password',2)";
		$db->query($sql);
		if($db->affected_rows>0){
			$message="添加成功";
			$n="添加用户页";
			$url="TJuser.php";
			include "message.html";
		}else{
			$message="添加失败";
			$n="添加用户页";
			$url="TJuser.php";
			include "message.html";
		}
	}
	

?>