<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Article</title>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/article.css">
	<link rel="shortcut icon" href="../img/logo.ico">
	<script type="text/javascript">
		
		window.onload = function(){
			var omain=document.querySelector('.main-wrapper');
			omain.style.display = 'block';
		}

	</script>
	<style type="text/css">
		.content-register
		{
			min-height: 400px;
			width:1080px;
			margin:50px auto;
			background: #fff;
		}
		.content-register h1
		{
			padding-left: 50px;
			padding-top: 30px;
		}
		
		.content-register div
		{
			margin:30px;
		}
		.content-register .register-input
		{
			display: inline-block;
			padding: 5px;
			margin-left:20px;
		}

		.content-register .submitinput
		{
			display: block;
			margin-left: 30px;
		}
	</style>
</head>
<body style="overflow-x: hidden;">
	<div class="main-wrapper">
		<header>
		<nav>
			<div class="logo"><a href="#">LOGO</a></div>
			<ul>
				
				<li><a href="../posts/index.php">首页</a></li>
				<li><a href="#">注册</a></li>
				<li><a href="#">登陆</a></li>
				<li id="sidebar_trigger"><a href="#">菜单</a></li>			
			</ul>
		</nav>
		<div id="banner">
			<div class="inner">
				<h1>HJC</h1>
				<p class="sub-heading">这是我的博客
				
			 	</p>
				<button onclick="window.location.href='../posts/preview.php';">文章概览</button>
				<div class="more">
					more
				</div>

			</div>
		</div>
		</header>

		<div class="content-register">
			<h1> 注册新用户 </h1>
			<div id="notice"  style="background-color:yellow;">
			 	<?php if(isset($_GET['notice'])) echo $_GET['notice']; ?>
			</div>

			<form action="save.php" method="post">
			<div>
				<span>账号</span><input type="text" name="name" class="register-input"/>
			</div>
			<div>
				<span>密码</span><input type="password" name="password" class="register-input"/>
			</div>
			<div>
				<span>重新输入密码</span><input type="password" name="password2" class="register-input"/>
			</div>
			<input type="submit" value="注册" class="submitinput"/>
			</form>
		</div>
		<footer>
			<ul class="share-group">
				<li>1</li>
				<li>2</li>
				<li>3</li>
			</ul>

			<div class="copyright">
				&copy hjc-blog
			</div>
		</footer>
	</div>
	
	<div class="mask">
	</div>

	<div id="sidebar">
		<ul>
			<li><a href="#">item1</a></li>
			<li><a href="#">item2</a></li>
			<li><a href="#">item3</a></li>
			<li><a href="#">item4</a></li>
		</ul>
	</div>
	

	<button id="backToTop">返回顶部</button>

	<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>


</body>
</html>
