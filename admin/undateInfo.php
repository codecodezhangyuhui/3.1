<?php
	include "../public/session.php";
	include "../public/db.php";
	$cid=$_POST["id"];
	$cname=$_POST["cname"];
	$pid=$_POST["pid"];
	$sql="update category set cname='$cname',pid=$pid where cid=".$cid;
	$db->query($sql);
	if($db->affected_rows>0){
		$message="修改成功";
		$n="管理分类页";
		$url="GLFL.php";
		include "message.html";
	}else{
		$message="修改失败";
		$n="管理分类页";
		$url="GLFL.php";
		include "message.html";
	}
?>