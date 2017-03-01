<?php
	session_start();
	include "../public/db.php";
	$username=$_POST["username"];
	$password=md5($_POST["password"]);
	$sql="select * from user";
	$result=$db->query($sql);
	while($row=$result->fetch_assoc()){
		if($row["username"]==$username){
			if($row["password"]==$password){
				$_SESSION["is_login"]="ok";
				$_SESSION["username"]=$username;
				$message="登录成功";
				$n="主页";
				$url="main.php";
				include "message.html";
				exit;
			}
		}
	}
	$message="登录失败";
	$url="login.php";
	$n="登录页";
	include "message.html";
	
?>