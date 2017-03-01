<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>登录页</title>
</head>
<style>
div,h3{
	padding: 0;
	margin: 0;
}
	.box{
		width:300px;
		height:250px;
		border:1px solid #000;
		position: fixed;
		left:0; top:0;bottom: 0;right: 0;
		margin: auto;
		text-align: center;
		background: dodgerblue;
	}
	.sub{
		width:100px;
		height: 30px;
		cursor: pointer;
		line-height: 30px;
		text-align: center;
		font-size: 14px;
		border:none;
		border-radius: 5px;
	}
	form{
		margin-top:30px;
	}
	.top{
		width: 100%;
		height:60px;
		border-bottom: 1px solid #000;
		background: blue;
		line-height: 60px;
	}
	.top>h3{
		color:#eee;
	}
</style>
<body>
	<div class="box">
		<div class="top">
			<h3>登录页面</h3>
		</div>
		<form action="denglu.php" method="post">
			用户名：<input type="text" name="username" class="username"/></p>
			密　码：<input type="password" name="password" class="password" autocomplete="off"/></p>
			<input type="submit" value="登录" class="sub"/></p>
		</form>
		没有账户请<a href="reg.php">点击注册</a>
	</div>
</body>
</html>