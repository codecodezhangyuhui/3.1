<?php
	include "../public/session.php";
	include "../public/db.php";
	$posid=$_GET["posid"];
	$posname=$_GET["posname"];
	$sql="update position set posname='$posname' where posid=".$posid;
	$db->query($sql);
	if($db->affected_rows>0){
		$message="修改成功";
		$n="管理推荐位页";
		$url="GLTJW.php";
		include "message.html";
	}else{
		$message="修改失败";
		$n="管理推荐位页";
		$url="GLTJW.php";
		include "message.html";
	}
?>