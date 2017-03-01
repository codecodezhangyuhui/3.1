<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<style>
	ul,li{
		margin: 0;
		padding: 0;
		list-style: none;
	}
	a{
		text-decoration: none;
	}
	.header{
		width:100%;
		height:60px;
		border: 1px solid #000;
		margin:0 auto;
	}
	.nav{
		width:1300px;
		height:60px;
		background: #ccc;
		margin: 10px auto;
	}
	.menu{
		width:100%;
		height: 100%;
	}
	.menu>li{
		float: left;
		width:100px;
		height:100%;
		line-height: 60px;
		text-align: center;
		position: relative;
	}
	.menu>li>a{
		display: block;
		font-size: 14px;
		color:#000;
	}
	.menu>li>a:hover{
		background: blue;
		color:#fff;
	}
	.erji{
		width:100%;
		border:1px solid #ccc;
		background: #eee;
		position: absolute;
		top:60px;
		left:0;
		display: none;
	}
	.erji>li{
		width:100%;
		height:30px;
		line-height: 30px;
		text-align: center;
	}
	.erji>li>a{
		display: block;
	}
	.erji>li>a:hover{
		background: pink;
		color:yellow;
	}
	.shouye{
		width:0;
		height: 0;
		border: 0;
	}
	.menu>li.select>a{
		background: blue;
		color:#fff;
	}
</style>
<script src="../js/jquery.min.js"></script>
<script>
$(function(){
	$(".opt").hover(function(){
			$(this).find(".erji").slideDown();
	},function(){
		$(this).find(".erji").stop(true);
		$(this).find(".erji").slideUp();
	})
})
</script>
<body>
	<div class="header">111</div>
	<div class="nav">
		<ul class="menu">
			<li class="opt <?php if(!isset($_GET['id'])){echo 'select';}?>">
				<a href="main.php">首页</a>
			</li>
			<?php
				include "../public/db.php";
				$sql="select * from category where pid=0";
				$result=$db->query($sql);
				while($row=$result->fetch_assoc()){
			?>
			<li class="opt <?php if(isset($_GET["id"])){if($_GET["id"]==$row["cid"]){echo 'select';}} ?>">
				<a href="list.php?id=<?php echo $row["cid"] ?>"><?php echo $row["cname"]?></a>
				<ul class="erji">
					<?php
						$sql1="select * from category where pid=".$row["cid"];
						$result1=$db->query($sql1);
						while($row1=$result1->fetch_assoc()){
					?>
					<li>
						<a href="show.php?id=<?php echo $row1["cid"]?>"><?php echo $row1["cname"]; ?></a>
					</li>
					<?php
					}
					?>
				</ul>
			</li>
			<?php
			}	
			?>
		</ul>
	</div>
