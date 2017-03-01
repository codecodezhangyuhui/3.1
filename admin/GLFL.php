<?php
	include "../public/session.php";
	include "../public/db.php";
	include "../public/functions.php";
	$table=new zyh();
	$table->table("0","·",$db,"category");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<style>
	table{
		width: 80%;
		border:1px solid black;
		margin:auto;
		border-collapse:collapse;
	}
	tr,th,td{
		width:25%;
		height:30px;
		border:1px solid black;
		text-align: center;
		line-height: 30px;
	}
	.cname{
		text-align: left;
	}
</style>
<body>
	<table>
		<thead>
			<tr>
				<th>cid</th>
				<th>cname</th>
				<th>pid</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			<?php
				echo $table->str;
				
			?>
		</tbody>
		
		
	</table>
</body>
</html>