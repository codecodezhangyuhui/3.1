<?php
	include "../public/session.php";
	include "../public/db.php";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<style>
	table{
		width: 800px;
		border:1px solid black;
		margin:auto;
		border-collapse:collapse;
		
	}
	tr,th,td{
		width:14%;
		height:30px;
		border:1px solid black;
		text-align: center;
		line-height: 30px;
	}
</style>
<body>
	<table>
		<thead>
			<tr>
				<th>posid</th>
				<th>推荐位名称</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$sql="select * from position";
				$result=$db->query($sql);
				while($row=$result->fetch_assoc()){
			?>
			<tr>
				<td><?php  echo $row["posid"]?></td>
				<td><?php  echo $row["posname"]?></td>
				<td>
					<a href='TJWdel.php?id=<?php  echo $row["posid"]?>'>删除</a>
					<a href='TJWupdate.php?id=<?php  echo $row["posid"]?>'>修改</a>
				</td>
			</tr>
			<?php
			}	
			?>
		</tbody>
	</table>
</body>
</html>