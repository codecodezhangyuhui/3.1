<?php
	include "../public/session.php";
	include "../public/db.php";
	$cid=$_POST["cid"];
	$username=$_SESSION["username"];
	
	
	
	if(isset($stitle)){
		$stitle="";
	}else{
		$stitle=$_POST["stitle"];
	}
	
	
	if(isset($scon)){
		$scon="";
	}else{
		$scon=$_POST["scon"];
	}
	
	if(isset($imgurl)){
		$imgurl="";
	}else{
		$imgurl=$_POST["imgurl"];
	}
	
	if(isset($posid)){
		$posid="";
	}else{
		$posid=$_POST["posid"];
	}
	
	$sql="INSERT INTO `show`(`stitle`, `scon`, `cid`, `username`,`imgurl`,`posid`) VALUES ('$stitle','$scon','$cid','$username','$imgurl','$posid')";
	$db->query($sql);
	if($db->affected_rows>0){
		$message="添加成功";
		$n="添加内容页";
		$url="TJNR.php";
		include "message.html";
	}else{
		$message="添加失败";
		$n="添加内容页";
		$url="TJNR.php";
		include "message.html";
	}
?>