<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<link rel="stylesheet" href="../css/public.css">
<link rel="stylesheet" href="../css/header.css">
<script src="../js/jquery.min.js"></script>
<script src="../js/js.js"></script>
<body>
	<!-- 顶部导航 star-->
	<div class="zyh_topnavbox">
		<div class="zyh_topnav">
			<div class="zyh_topnavleft">
				<span class="zyh_topnavleftdian">·</span>
				<span class="zyh_topnavleftzi">欢迎进入本网站!</span>
			</div>
			<ul class="zyh_topnavright">
				<li>
					<img src="../images/head1.png" alt="">
					<a href="">设为首页</a>
				</li>
				<li>
					<img src="../images/head2.png" alt="">
					<a href="">加入收藏</a>
				</li>
				<li>
					<img src="../images/head3.png" alt="">
					<a href="">联系我们</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- 顶部导航 end-->
	<!-- banner导航 star-->
	<div class="zyh_bannernavbox" style="background-image:url(../images/nav.png)">
		<div class="zyh_bannernav">
			<div class="zyh_logo">
				<img src="../images/logo.png" alt="">
			</div>
			<ul class="zyh_bannernavright">
				<?php
					include "../public/db.php";
					$sql="select * from category where pid=0";
					$result=$db->query($sql);
					while($row=$result->fetch_assoc()){
				?>
				<?php
					if($row["cid"]==48){
				?>
				<li class="zyh_nav1" style="background-image:url(../images/11.png)">
					<a href="index.php">
						<div><?php echo $row["cname"]; ?></div>
						<img src="../images/111.png" alt="">
					</a>
				</li>
				<?php
				}else if($row["cid"]==49){
				?>
				<li class="zyh_nav2" style="background-image:url(../images/22.png)">
					<a href="category.php?id=<?php echo $row['cid'];?>">
						<div><?php echo $row["cname"]; ?></div>
						<img src="../images/222.png" alt="">
					</a>
				</li>
				<?php
				}else if($row["cid"]==50){
				?>
				<li class="zyh_nav3" style="background-image:url(../images/33.png)">
					<a href="category.php?id=<?php echo $row['cid'];?>">
						<div><?php echo $row["cname"]; ?></div>
						<img src="../images/333.png" alt="">
					</a>
				</li>
				<?php
				}else if($row["cid"]==51){
				?>
				<li class="zyh_nav4" style="background-image:url(../images/44.png)">
					<a href="category.php?id=<?php echo $row['cid'];?>">
						<div><?php echo $row["cname"]; ?></div>
						<img src="../images/444.png" alt="">
					</a>
				</li>
				<?php
				}else if($row["cid"]==52){
				?>
				<li class="zyh_nav5" style="background-image:url(../images/55.png)">
					<a href="category.php?id=<?php echo $row['cid'];?>">
						<div><?php echo $row["cname"]; ?></div>
						<img src="../images/555.png" alt="">
					</a>
				</li>
				<?php
				}else if($row["cid"]==53){
				?>
				<li class="zyh_nav6" style="background-image:url(../images/66.png)">
					<a href="category.php?id=<?php echo $row['cid'];?>">
						<div><?php echo $row["cname"]; ?></div>
						<img src="../images/666.png" alt="">
					</a>
				</li>
				<?php
				}else if($row["cid"]==54){
				?>
				<li class="zyh_nav7" style="background-image:url(../images/77.png)">
					<a href="category.php?id=<?php echo $row['cid'];?>">
						<div><?php echo $row["cname"]; ?></div>
						<img src="../images/777.png" alt="">
					</a>
				</li>
				<?php
				}
				}
				?>
			</ul>
		</div>
	</div>
	<!-- banner导航 end-->
