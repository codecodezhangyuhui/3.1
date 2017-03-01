<?php
	include "../public/session.php";
	include "../public/db.php";
	$posname=$_GET["posname"];
	$sql="insert into position (posname) values ('$posname')";
	$db->query($sql);
	if($db->affected_rows>0){
		$message="添加成功";
		$n="添加推荐位页";
		$url="TJTJW.php";
		include "message.html";
	}else{
		$message="添加失败";
		$n="添加推荐位页";
		$url="TJTJW.php";
		include "message.html";
	}
?>