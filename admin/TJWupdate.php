<?php
	include "../public/session.php";
	include "../public/db.php";
	$posid=$_GET["id"];
	$sql="select * from position where posid=".$posid;
	$result=$db->query($sql);
	$row=$result->fetch_assoc();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<form action="TJWupdateinfo.php">
		推荐位名称：<input type="text" name="posname" value="<?php echo $row['posname']; ?>"/></p>
		<input type="hidden" name="posid" value="<?php echo $posid;?>"/>
		<input type="submit" value="修改"/>
	</form>
</body>
</html>