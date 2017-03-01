<?php
	include "../public/session.php";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>主页</title>
</head>

<style>
	html,body{
		height: 100%;
		padding: 0;
		margin: 0;
		overflow: hidden;
		background-image:url(../upload/bjtt.jpg);
		background-size:100% 100%;
	}
	a{
		text-decoration: none;
	}
	.header{
		width:99%;
		height:15%;
		text-align: center;
		border:2px solid blue;
		margin:0 auto;
		position: relative;
	}
	.main{
		width:99%;
		height: 84%;
		border:2px solid blue;
		margin: 0 auto;
		border-top:0;
	}
	.left{
		float: left;
		width:19%;
		height: 100%;
		border-right:1px solid blue;
	}
	.right{
		float: right;
		width:80%;
		height: 100%;
	}
	.opt{
		cursor: pointer;
		margin-left:30px;
	}
	.son>li{
		margin-top:10px;
	}
	iframe{
		width:100%;
		height: 100%;
	}
	.header>h1{
		line-height: 300%;
		position: absolute;
		left:0;
		top:0;
		right:0;
		bottom: 0;
		margin: auto;
	}
	.header>a{
		position: absolute;
		right:40px;
		top:44%;
		cursor: pointer;
		font-size: 14px;
		color:#000;
	}
	.header>a:hover{
		color:blue;
		text-decoration: underline;
	}
</style>
<script src="../js/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$(".opt").click(function(){
			$(this).find(".son").toggle();
		})
		$(".son>li>a").click(function(e){
			e.stopPropagation();
		})
	})
</script>
<body>
	<div class="header">
		<h1><?php echo $_SESSION["username"]; ?> 欢迎登录内容管理系统</h1>
		<a href="unsetdenglu.php">退出登录</a>
	</div>
	<div class="main">
		<div class="left">
			<ul class="menu">
				<li class="opt">用户管理
					<ul class="son">
						<li><a href="TJuser.php" target="right">添加用户</a></li>
						<li><a href="GLuser.php" target="right">管理用户</a></li>
					</ul>
				</li>
			</ul>
			<ul class="menu">
				<li class="opt">分类管理
					<ul class="son">
						<li><a href="TJFL.php" target="right">添加分类</a></li>
						<li><a href="GLFL.php" target="right">管理分类</a></li>
					</ul>
				</li>
			</ul>
			<ul class="menu">
				<li class="opt">内容管理
					<ul class="son">
						<li><a href="TJNR.php" target="right">添加内容</a></li>
						<li><a href="GLNR.php" target="right">管理内容</a></li>
					</ul>
				</li>
			</ul>
			<ul class="menu">
				<li class="opt">推荐位管理
					<ul class="son">
						<li><a href="TJTJW.php" target="right">添加推荐位</a></li>
						<li><a href="GLTJW.php" target="right">管理推荐位</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="right">
			<iframe src="" frameborder="0" name="right"></iframe>
		</div>
	</div>
</body>
</html>