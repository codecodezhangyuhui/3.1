<?php
	include "../public/session.php";
	include "../public/db.php";
	$sid=$_GET["id"];
	$sql="delete from `show` where sid=".$sid;
	$db->query($sql);
	if($db->affected_rows>0){
		$message="删除成功！";
		$n="管理内容页";
		$url="GLNR.php";
		include "message.html";
	}else{
		$message="删除失败！";
		$n="管理内容页";
		$url="GLNR.php";
		include "message.html";
	}
?>