<?php
	include "../public/session.php";
	include "../public/db.php";
	include "../public/functions.php";
	$sid=$_GET["id"];
	
	$sql="select * from `show` where sid=".$sid;
	$result=$db->query($sql);
	$row=$result->fetch_assoc();
	
	
	
	$sql1="select * from category where cid=".$row["cid"];
	$result1=$db->query($sql1);
	$row1=$result1->fetch_assoc();
	
	$tree=new zyh();
	$tree->tree("0","·",$db,"category",$row1["cid"]);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<script src="../js/upload.js"></script>
<script>
	window.onload=function(){
		var obj=new upload("upfiles.php",".file",".progress",".img");
		var btn=document.querySelector("#btn");
		obj.loadStart=function(){
			btn.setAttribute("disabled","disabled");
		}
		obj.up(function(q){
			if(q){
				var imgurl=document.querySelector("#imgurl");
				imgurl.value=q;
				btn.removeAttribute("disabled");
			}
		});
	}
</script>
<style>
	#file{
		position: absolute;
		top:46px;
		left:300px;
	}
	.imgs{
		height:200px;
		width:200px;
		border:1px solid #000;
		margin-top:10px;
		position: relative;
		overflow: hidden;
	}
	.jindu{
		width:100%;
		height:30px;
		position: absolute;
		bottom:0;
		left:0;
	}
	.jindu>div{
		width:0%;
		height:100%;
		background: #000;
		text-align: center;
		line-height: 30px;
		opacity: 0.6;
		font-size: 16px;
		color:yellow;
	}
	.img{
		width:100%;
		height: 100%;
	}
	.filebox{
		position: absolute;
		top:10px;
		left:300px;
	}
</style>
<body>
	<form action="NRupdateInfo.php" method="post">
		所属分类：<select name="cid">
					<option value="0">一级分类</option>
					<?php   
						echo $tree->str;
					?>
				</select></p>
		标题：<input type="text" name="stitle" value="<?php echo $row["stitle"]; ?>"/></p>
		内容：<br>
		<textarea name="scon" cols="30" rows="10"><?php echo $row["scon"]; ?></textarea></p>
		<div class="filebox">
			<input type="file" name="file" class="file"/>
			<div class="imgs">
				<img src="<?php echo $row['imgurl']?>" alt="" class="img"/>
				<div class="jindu">
					<div class="progress"></div>
				</div>	
			</div>
		</div>
		<p>推荐位：</p>	
		<?php
			$sql="select * from position";
			$result=$db->query($sql);
			while($row2=$result->fetch_assoc()){
		?>
		&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row2['posname']?>：<input  type="radio" name="posid" value="<?php echo $row2['posid']?>"  <?php if($row2['posid']==$row['posid']){?>checked="checked"<?php } ?>/></P>
		<?php
		}	
		?>
		<input type="hidden" name="imgurl" id="imgurl"/>
		<input type="hidden" name="id" value="<?php echo $sid;?>"/>
		<input type="submit" value="修改" id="btn"/>
	</form>
</body>
</html>