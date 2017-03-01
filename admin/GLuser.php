<?php
	include "../public/session.php";
	include "../public/db.php";
	$sql="select * from user where rote=2";
	$result=$db->query($sql);
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
</style>
<body>
	<body>
	<table>
		<thead>
			<tr>
				<th>userid</th>
				<th>uername</th>
				<th>rote</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($row=$result->fetch_assoc()){	
			?>
				<tr>
					<td><?php echo $row["userid"];?></td>
					<td><?php echo $row["username"];?></td>
					<td><?php echo $row["rote"];?></td>
					<td>
						<a href='deluser.php?id=<?php  echo $row["userid"]?>'>删除</a>
						<a href='XGuser.php?id=<?php  echo $row["userid"]?>'>修改</a>
					</td>
				</tr>
			<?php
			}
			?>
		</tbody>
		
		
	</table>
</body>
</html>