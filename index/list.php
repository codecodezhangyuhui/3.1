<?php
	include "header.php";
	include "../public/db.php";
	$id=$_GET["id"];
	$sql="select * from category where pid=".$id;
	$result=$db->query($sql);
	
?>
<style>
a{
	text-decoration: none;
	color:#000;
}
	.box{
		width:300px;
		height: 200px;
		border:1px solid #000;
	}
</style>
<?php
	while($row=$result->fetch_assoc()){
?>
	<div class="box"><a href="show.php?id=<?php echo $row["cid"];?>"><?php echo $row["cname"];?></a></div>
<?php
	}	
?>
</body>
</html>