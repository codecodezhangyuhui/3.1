<?php
	include "../public/session.php";
	include "../public/db.php";
	$cid=$_GET["id"];
	$sql1="select * from category";
	$result=$db->query($sql1);
	
	$sql2="select * from `show`";
	$result2=$db->query($sql2);
	while($row=$result->fetch_assoc()){
		if($cid==$row["pid"]){
			$message="删除失败！请先删除子元素";
			$n="管理分类页";
			$url="GLFL.php";
			include "message.html";
			exit;
		}else{
			while($row2=$result2->fetch_assoc()){
				if($cid==$row2["cid"]){
					$message="删除失败！请先删除内容";
					$n="管理分类页";
					$url="GLFL.php";
					include "message.html";
					exit;
				}
			}
		}
	}
	$sql="delete from category where cid=".$cid;
	$db->query($sql);
	if($db->affected_rows>0){
		$message="删除成功！";
		$n="管理分类页";
		$url="GLFL.php";
		include "message.html";
	}else{
		$message="删除失败！";
		$n="管理分类页";
		$url="GLFL.php";
		include "message.html";
	}
?>