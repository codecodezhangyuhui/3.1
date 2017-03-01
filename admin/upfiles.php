<?php
	include "../public/session.php";
	date_default_timezone_set("Asia/Shanghai");
	$time=time();
	$showtime=date("Y-m-d");
	if(is_uploaded_file($_FILES["file"]["tmp_name"])){
		$name=$_FILES["file"]["name"];
		if(!file_exists("../upload/".$showtime)){
			$wenjian=mkdir("../upload/".$showtime,0777,true);
		}
		$url="../upload/".$showtime."/".$time.$name;
		move_uploaded_file($_FILES["file"]["tmp_name"],$url);
		echo "http://localhost/news/upload/".$showtime."/".$time.$name;
	}
?>