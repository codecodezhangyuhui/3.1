<?php
	include "header.php";
	include "../public/db.php";
	$sid=$_GET["id"];
	$sql="select * from `show` where sid=".$sid;
	$result=$db->query($sql);
	$row=$result->fetch_assoc();
	
	$sql1="select * from category where cid=".$row["cid"];
	$result1=$db->query($sql1);
	$row1=$result1->fetch_assoc();
?>
<link rel="stylesheet" href="../css/category.css">
<script src="../js/jquery.min.js"></script>
<script src="../js/category.js"></script>
<!-- banner star -->
		<div class="zyh_bannerbox" style="background-image: url(../images/banner.png)">
			<div class="zyh_banner">
				<img src="../images/zy_banner.png" alt="" />
			</div>
		</div>
<!-- banner end -->
<!--body star-->
		<style>
			.zyh_bodyleftzi .ahover{
				color: #491304;
				font-size: 16px;
				line-height: 38px;
				background: url(../images/sub_hover.PNG) no-repeat;	
			}
		</style>
		<div class="zyh_bodybox">
			<div class="zyh_bodyleft" style="background-image: url(../images/sub.png)">
				
				<ul class="zyh_bodyleftzi">
				
					<li style="background: url(../images/ub.png) no-repeat 0 34px"><a href="list.php?id=<?php echo $row1["cid"];?>"><?php echo $row1["cname"];?></a></li>
				
				</ul>
				
			</div>
			<div class="zyh_bodyright" style="background-image:url(../images/right_bg.png)">
				<div class="zyh_bodyrighttop" style="background-image: url(../images/title.png)">
					
					<div class="zyh_bodyrighttopl">
						<?php echo $row1["cname"];?>
					</div>
					<div class="zyh_bodyrighttopr">
						 <a href="index.php">首页</a> <span>><?php echo $row1["cname"];?></span>
					</div>
				</div>
				<div class="zyh_bodyrightbottom">
					<p class="zyh_title"><?php echo $row["stitle"];?></p>
					<hr />
					<?php echo $row["scon"];?>
					<img src="<?php echo $row["imgurl"];?>" alt="" />
					<hr />
				</div>
			</div>
		</div>
		<div class="zyh_clear"></div>
		<style>
			hr{
				width:100%;
			}
			
		</style>
<?php
	include "footer.php";
?>