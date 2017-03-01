<?php
	include "../public/session.php";
	include "../public/db.php";
	$userid=$_GET["id"];
	$sql="select * from user where userid=".$userid;
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
	<form action="XGuserInfo.php" method="post">
		用户名：<input type="text" name="username" value="<?php echo $row["username"];?>"/></p>
		密　码：<input type="password" name="password" value="<?php echo $row["password"];?>"/><p>
			<input type="hidden" name="userid" value="<?php echo $userid;?>"/>
		<input type="submit" value="修改" />
	</form>
</body>
</html>