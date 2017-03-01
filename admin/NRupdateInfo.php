<?php
	include "../public/session.php";
	include "../public/db.php";
	$sid=$_POST["id"];
	
	$cid=$_POST["cid"];
	
	
	if(!isset($_POST["stitle"])){
		$stitle="";
	}else{
		$stitle=$_POST["stitle"];
	}
	
	
	if(!isset($_POST["scon"])){
		$scon="";
	}else{
		$scon=$_POST["scon"];
	}
	
	if(!isset($_POST["imgurl"])){
		$imgurl="";
	}else{
		$imgurl=$_POST["imgurl"];
	}
	
	if(!isset($_POST["posid"])){
		$posid=0;
	}else{
		$posid=$_POST["posid"];
	}
	$sql="update `show` set stitle='$stitle',scon='$scon',cid=$cid,imgurl='$imgurl',posid=$posid where sid=".$sid;
	$db->query($sql);
	if($db->affected_rows>0){
		$message="修改成功";
		$n="管理内容页";
		$url="GLNR.php";
		include "message.html";
	}else{
		$message="修改失败";
		$n="管理内容页";
		$url="GLNR.php";
		include "message.html";
	}
?>