<?php
	include "../public/session.php";
	include "../public/db.php";
	$userid=$_POST["userid"];
	$username=$_POST["username"];
	$password=md5($_POST["password"]);
	$sql="update user set username='$username',password='$password' where userid=".$userid;
	$db->query($sql);
	if($db->affected_rows>0){
		$message="修改成功";
		$n="管理用户页";
		$url="GLuser.php";
		include "message.html";
	}else{
		$message="修改失败";
		$n="管理用户页";
		$url="GLuser.php";
		include "message.html";
	}
?>