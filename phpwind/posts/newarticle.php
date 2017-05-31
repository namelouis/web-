<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Article</title>
	<link rel="shortcut icon" href="../img/logo.ico">
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/article.css">
	<script type="text/javascript">
		
		window.onload = function(){
			var omain=document.querySelector('.main-wrapper');
			omain.style.display = 'block';
		}
	</script>
	<style type="text/css">
		div.add-article form .addArticleTitle
		{
			padding:6px;
		}
		.submitinput
		{
			display:block;
			margin-top: 30px;
		}

	</style>
</head>
<body style="overflow-x: hidden;">
	<div class="main-wrapper">
		<header>
		<nav>
			<div class="logo"><a href="#">LOGO</a></div>
			<ul>
				
				<li><a href="index.php">首页</a></li>
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
				<button onclick="window.location.href='preview.html';">文章概览</button>
				<div class="more">
					more
				</div>

			</div>
		</div>
		</header>

		<div class="content">
		
			<div class="add-article" >
				<h3>添加新博客</h3>
				<form action="save.php" method="post" >
					<h4>标题</h4>
					<input class="addArticleTitle" type="text" name="title" value="" />
					
					
					<h4>正文</h4>		
					<textarea  name="body"></textarea>
					

					<input type="submit" name="commenttext" value="提交" class="submitinput">
				</form>
					
			</div>		
				
				

			

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
