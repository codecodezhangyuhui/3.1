<?php
	include "../public/db.php";
	$username=$_POST["username"];
	$password=md5($_POST["password"]);
	$kouling=$_POST["kouling"];
	$sql1="select kouling from KL";
	$result=$db->query($sql1);
	$row1=$result->fetch_assoc();
	if($row1["kouling"]==$kouling){
		$sql="insert into user (username,password,rote) values ('$username','$password','1')";
		$db->query($sql);
		if($db->affected_rows>0){
			$message="注册成功！";
			$n="登录页";
			$url="login.php";
			include "message.html";
		}
	}else{
		$message="口令错误，注册失败！";
		$n="注册页";
		$url="reg.php";
		include "message.html";
	}
	
?>