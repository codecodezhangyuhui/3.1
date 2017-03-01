<?php
	include "../public/session.php";
	include "../public/db.php";
	$pid=$_POST["pid"];
	$cname=$_POST["cname"];
	$sql="insert into category (cname,pid) values ('$cname',$pid)";
	$db->query($sql);
	if($db->affected_rows>0){
		$message="添加成功！";
		$n="首页";
		$url="TJFL.php";
		include "message.html";
	}else{
		$message="添加失败！";
		$n="首页";
		$url="TJFL.php";
		include "message.html";
	}
?>