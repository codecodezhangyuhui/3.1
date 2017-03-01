<?php
	include "../public/session.php";
	include "../public/db.php";
	$posid=$_GET["id"];
	$sql="delete from position where posid=".$posid;
	$db->query($sql);
	if($db->affected_rows>0){
		$message="删除成功";
		$n="管理推荐位页";
		$url="GLTJW.php";
		include "message.html";
	}else{
		$message="删除失败";
		$n="管理推荐位页";
		$url="GLTJW.php";
		include "message.html";
	}
?>