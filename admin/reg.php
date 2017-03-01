<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>注册页</title>
</head>
<style>
	div,h3{
	padding: 0;
	margin: 0;
}
	.box{
		width:300px;
		height:310px;
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
		color:#000;
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
	form{
		margin-top:30px;
	}
	span{
		font-size:12px;
	}
	.kouling{
		width:140px;
	}
</style>
<script src="../js/jquery.min.js"></script>
<script>
	$(function(){
		//用户名
		var reg=/^\w{5,10}$/;
		$("input[name='username']").keyup(function(){
			var val=$(this).val();
			if(!reg.test(val)){
				$("span").eq(0).html("格式错误").css("color","red");
				$("input[name='btn']").attr("disabled","disabled");
			}else{
				$.ajax({
					type:"post",
					url:"selectUser.php",
					data:{username:val},
					success:function(q){
						if(q=="yes"){
							$("span").eq(0).html("用户名可用").css("color","green");
							$("input[name='username']").attr("ok","ok");
							if($("input[name='password']").attr("ok")=="ok"){
								$("input[name='btn']").removeAttr("disabled");
							}
						}else if(q=="no"){
							$("span").eq(0).html("用户名已存在").css("color","red");
							$("input[name='username']").removeAttr("ok");
							$("input[name='btn']").attr("disabled","disabled");
						}
					}
				})
			}
		})
		//密码
		$("input[name='password']").keyup(function(){
			var val=$(this).val();
			if(!reg.test(val)){
				$("span").eq(1).html("格式错误").css("color","red");
				$("input[name='password']").removeAttr("ok");
				$("input[name='btn']").attr("disabled","disabled");
			}else{
				$("span").eq(1).html("格式正确").css("color","green");
				$("input[name='password']").attr("ok","ok")
				if($("input[name='username']").attr("ok")=="ok"){
					$("input[name='btn']").removeAttr("disabled");
				}
			}
		})
	})
</script>
<body>
	
	<div class="box">
		<div class="top">
			<h3>注册页面</h3>
		</div>
		<form action="zc.php" method="post">
			用户名：<input type="text" name="username" autocomplete="off"/><br><span></span><br>
			密　码：<input type="password" name="password" autocomplete="off" /><br><span></span><br>
			管理员口令：<input type="password" name="kouling" class="kouling"/><br /><br />
			<input type="submit" value="注册" class="sub" disabled="disabled" name="btn"/><br><br>
		</form>
		已有账户请<a href="login.php">点击登录</a>
	</div>
</body>
</html>