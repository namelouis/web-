<?php 

require_once '../inc/session.php';
require_once '../inc/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>首页 - 博客</title>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<script type="text/javascript">
		
		window.onload = function(){
			var omain=document.querySelector('.main-wrapper');
			omain.style.display = 'block';
		}
	</script>
	<style type="text/css">
		.share-group li a
		{
			text-decoration: none;
			color:white;
		}

		.copyright a
		{
			text-decoration: none;
			color:white;
		}
	</style>
</head>
<body style="overflow-x: hidden;">

	<div class="main-wrapper">
		<header>
		<nav>
			<div class="logo"><a href="#">LOGO</a></div>
			<ul>
				
				<li><a href="#">首页</a></li>
				<li><a href="../users/index.php">注册</a></li>
				<li><a href="../sessions/new.php">登陆</a></li>
				<li id="sidebar_trigger"><a href="#">菜单</a></li>			
			</ul>
		</nav>
		<div id="banner">
			<div class="inner">
				<h1>HJC</h1>
				<p class="sub-heading">这是我的博客
				
			 	</p>
				<button id="btnToPreview" onclick="window.location.href='preview.php'">文章预览</button>
				<div class="more">
					more
				</div>

			</div>
		</div>
		</header>

		<div class="conten">
			<section class="green-section">
				<div class="wrapper">
					<div>
						<h2>欢迎</h2>
						<div class="hr"></div>
						<p></p>
					</div>

					<div class="icon-group">
						<span class="icon">item1</span>
						<span class="icon">item2</span>
						<span class="icon">item3</span>
					</div>
				</div>
			</section>
			<section class="gray-section">
				<div class="article-preview clearfix">
					<div class="img-section">
						<img src="../img/pic01.jpg">
					</div>

					<div class="text-section">
						<h2>博客板块1</h2>
						<！--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
						<--/p>
					</div>
				</div>
				
				<div class="article-preview clearfix">
					<div class="text-section">
						<h2>最新博客2 </h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>

					<div class="img-section">
						<img src="../img/pic02.jpg">
					</div>
				</div>
				
				<div class="article-preview clearfix">
					<div class="img-section">
						<img src="../img/pic03.jpg">
					</div>

					<div class="text-section">
						<h3>最新博客3 </h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
			</section>
			
		</div>
		<footer>
			<ul class="share-group">
				<li><a href="www.zqblog.club">邹琦的博客</a></li>
				<li><a href="www.iamscott.club">李经纬的博客</a></li>
				<li>3</li>
			</ul>

			<div class="copyright">
				&copy hjc-blog <a href="http://www.miitbeian.gov.cn/">浙ICP备17021734号</a>
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