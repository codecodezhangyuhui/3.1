<?php
	include "../public/session.php";
	include "../public/db.php";
	$userid=$_GET["id"];
	$sql="delete from user where userid=".$userid;
	$db->query($sql);
	if($db->affected_rows>0){
		$message="删除成功";
		$n="管理用户页";
		$url="GLuser.php";
		include "message.html";
	}else{
		$message="删除失败";
		$n="管理用户页";
		$url="GLuser.php";
		include "message.html";
	}
?>