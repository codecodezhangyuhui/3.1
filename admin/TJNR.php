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
	<form action="TJNRinfo.php" method="post">
		所属分类：<select name="cid">
					<option value="0">一级分类</option>
					<?php   
						echo $tree->str;
					?>
				</select></p>
		标题：<input type="text" name="stitle"/></p>
		内容：<br>
		<textarea name="scon" cols="30" rows="10"></textarea></p>
		<div class="filebox">
			<input type="file" name="file" class="file"/>
			<div class="imgs">
				<img src="" alt="" class="img"/>
				<div class="jindu">
					<div class="progress"></div>
				</div>	
			</div>
		</div>
		<p>推荐位：</p>	
		<?php
			$sql="select * from position";
			$result=$db->query($sql);
			while($row=$result->fetch_assoc()){
		?>
		&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['posname']?>：<input type="radio" name="posid" value="<?php echo $row['posid']?>"/></P>
		<?php
		}	
		?>
		<input type="hidden" name="imgurl" id="imgurl"/>
		<input type="submit" id="btn"/>
	</form>
</body>
</html>