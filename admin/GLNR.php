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
		width: 100%;
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
	.cname{
		text-align: left;
	}
</style>
<body>
	<table>
		<thead>
			<tr>
				<th>所属分类</th>
				<th>sid</th>
				<th>stitle</th>
				
				<th>stime</th>
				<th>username</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$sql="select * from `show`";
				$result=$db->query($sql);
				while($row=$result->fetch_assoc()){
					$sql1="select * from category where cid=". $row["cid"];  
					$result1=$db->query($sql1);
					$row1=$result1->fetch_assoc();
			?>
			<tr>
				<td><?php echo $row1["cname"];?></td>
				<td><?php echo $row["sid"];  ?></td>
				<td><?php echo $row["stitle"];  ?></td>
				
				<td><?php echo $row["stime"];  ?></td>
				<td><?php echo $row["username"];  ?></td>
				<td>
					<a href='NRdel.php?id=<?php  echo $row["sid"]?>'>删除</a>
					<a href='NRupdate.php?id=<?php  echo $row["sid"]?>'>修改</a>
				</td>
			</tr>
			<?php
			}
			?>
		</tbody>
		
		
	</table>
</body>
</html>