<?php
	include "../public/session.php";
	include "../public/db.php";
	include "../public/functions.php";
	$tree=new zyh();
	$tree->tree("0","·",$db,"category");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>添加分类</title>
</head>

<body>
	<form action="TJFLinfo.php" method="post">
		上级分类：	<select name="pid">
					<option value="0">一级分类</option>
					<?php   
						echo $tree->str;
					?>
				</select>
				</p>
		分类名称：<input type="text" name="cname"/></p>
		<input type="submit"/>
	</form>
</body>
</html>