<?php
	include "header.php";
	include "../public/db.php";
	$id=$_GET["id"];
	$sql="select * from `show` where cid=".$id;
	$result=$db->query($sql);
?>
<style>
	.box{
		width:500px;
		height: 300px;
		border:1px solid #000;
		margin:auto;
	}
</style>
<?php
	while($row=$result->fetch_assoc()){
?>
<div class="box"><?php  echo $row["scon"];?></div>
<?php
}	
?>
</body>
</html>