<?php
	include "../public/db.php";
	$username=$_POST["username"];
	$sql="select username from user";
	$result=$db->query($sql);
	while($row=$result->fetch_assoc()){
		if($username==$row["username"]){
			echo "no";
			exit;
		}
	}
	echo "yes";
?>