<?php
	include "../public/session.php";
	include "../public/db.php";
	include "../public/functions.php";
	
	$cid=$_GET["id"];

	$sql="select * from category where cid=".$cid;
	$result=$db->query($sql);
	$row=$result->fetch_assoc();
	
	$sql1="select * from category where cid=".$row["pid"];
	$result1=$db->query($sql1);
	$row1=$result1->fetch_assoc();
	
	$tree=new zyh();
	$tree->tree("0","·",$db,"category",$row1["cid"]);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<form action="undateInfo.php" method="post">
		上级分类：	<select name="pid">
					<option value="0">一级分类</option>
					<?php 
						echo $t=$tree->str;
					?>
				</select>
				</p>
		分类名称：<input type="text" name="cname" value="<?php echo $row["cname"]; ?>"/></p>
		<input type="hidden" name="id" value="<?php echo $cid; ?>" />
		<input type="submit" value="修改"/>
	</form>
</body>
</html>