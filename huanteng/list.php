<?php
	include "header.php";
	include "../public/db.php";
	$cid=$_GET["id"];
	$sql="select * from category where cid=".$cid;
	$result=$db->query($sql);
	$row=$result->fetch_assoc();
	
	$sqli="select *from category";
	$resulti=$db->query($sqli);
	
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
					<?php
						while($rowi=$resulti->fetch_assoc()){	
							if($rowi["pid"]==$row["pid"]){
					?>
					<li style="background: url(../images/ub.png) no-repeat 0 34px"><a href="list.php?id=<?php echo $rowi['cid']?>"><?php echo $rowi["cname"];?></a></li>
					<?php
					}
					}	
					?>
				</ul>	
				
			</div>
			<div class="zyh_bodyright" style="background-image:url(../images/right_bg.png)">
				<div class="zyh_bodyrighttop" style="background-image: url(../images/title.png)">
					<div class="zyh_bodyrighttopl">
						<?php
							$sql1="select * from category where cid=".$cid;
							$result1=$db->query($sql1);
							$row1=$result1->fetch_assoc();
							echo $row1["cname"];
						?>
					</div>
					<div class="zyh_bodyrighttopr">
						 <a href="">首页</a> <span>><?php echo $row1["cname"];?></span>
					</div>
				</div>
				<?php
					if($cid==60){
				?>
				<div class="zyh_bodyrightbottom">
					<ul class="zyh_liuyan">
						<li><span>留言标题</span><input class="zyh_inpt" type="text" /></li>
						<li><span>您的姓名</span><input class="zyh_inpt" type="text" /></li>
						<li><span>电子邮件</span><input class="zyh_inpt" type="text" /></li>
						<li><span>联系方式</span><input class="zyh_inpt" type="text" /></li>
						<li><span class="zyh_liuyanneirong">留言内容</span><textarea class="zyh_inpt" cols="" name="" rows=""></textarea></li>
					</ul>
					<input type="button" value="现在提交|SUBMIT" class="zyh_tijiao"/>
				</div>
				<?php
				}	
					$sql2="select * from `show` where cid=55";
					$result2=$db->query($sql2);
					
				?>
				<style>
					.zyh_bodyrightbottom>h1{
						text-align: center;
						font-size: 40px;
					}
					.zyh_bodyrightbottom>p{
						line-height: 50px;
					}
				</style>
				<div class="zyh_bodyrightbottom">
					<?php
						if($cid==55){
						$row2=$result2->fetch_assoc()
							
					?>
					<h1><?php echo $row2["stitle"];?></h1>
					<p><?php echo $row2["scon"];?></p>
					<img src="<?php echo $row2["imgurl"];?>" alt="" />
					<?php
					}
					if($cid==56){
						$sqlo="select * from `show` where cid=56";
						$resulto=$db->query($sqlo);
						$rowo=$resulto->fetch_assoc()
					?>
					<div class="zyh_bodyrightbottom">
						<?php echo $rowo["scon"];?>
					</div>
					<?php
					}	
					?>
				</div>
				
				<?php 
					if($cid==57){
						$sql3="select * from `show` where cid=57";
						$result3=$db->query($sql3);
						while($row3=$result3->fetch_assoc()){
				?>
				<ul class="zyh_bodyrightbottom">
					
					<li>
						<img src="../images/news_l.png" alt="" />
						<a href="show.php?id=<?php echo $row3["sid"]; ?>"><?php echo $row3["stitle"]; ?></a>
						<span>[<?php echo $row3["stime"]; ?>]</span>
					</li>
					
					
				</ul>
				<?php
				}
				}
				?>
				<ul class="zyh_chanpin">
				<?php
					if($cid==58){
					$sql4="select * from `show` where cid=58";
					$result4=$db->query($sql4);
					while($row4=$result4->fetch_assoc()){
				?>
					<li>
						<a href="show.php?id=<?php echo $row4["sid"];?>">
							<img src="<?php echo $row4["imgurl"];?>" alt="" />
							<p><?php echo $row4["stitle"];?></p>
						</a>
					</li>
				<?php
					}
					}	
				?>
					<div class="zyh_clear"></div>
				</ul>
				<!--<div class="zyh_fenyenav"></div>-->
				<?php
					if($cid==59){
						$sql5="select * from `show` where cid=59";
						$result5=$db->query($sql5);
						$row5=$result5->fetch_assoc();
				?>
				<div class="zyh_bodyrightbottom zyh_fuwu">
					<?php echo $row5["scon"];?>
				</div>
				<?php
				}
				?>
				<?php
					if($cid==61){
				?>
				<div class="zyh_bodyrightbottom">
					<?php
						$sql6="select * from `show` where cid=61";
						$result6=$db->query($sql6);
						while($row6=$result6->fetch_assoc()){
							echo $row6["scon"];
					?>
						
						<img src="<?php echo $row6["imgurl"];?>" alt="" />
					<?php
					}	
					?>
				</div>
				<?php
				}	
				?>
				<hr />
				
				
			</div>
			<div class="zyh_clear"></div>
		</div>
		<script>
			$(".zyh_fenyenav a").eq(0).replaceWith("<a href='{siteurl($siteid)}'>首页</a>");
		</script>
		<!--body end-->
<?php
	include "footer.php";
?>