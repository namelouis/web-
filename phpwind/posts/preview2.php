<?php 

require_once '../inc/session.php';
require_once '../inc/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>preview</title>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<script type="text/javascript">
		
		window.onload = function(){
			var omain=document.querySelector('.main-wrapper');
			omain.style.display = 'block';
		}
	</script>
	<style type="text/css">
		.card .control span a
		{
			text-decoration: none;
			color:#fff;
		}
		.card .control span a:hover
		{
			color:#000;
		}

		.card h3:hover
		{
			color:#000;
			cursor: pointer;
		}
	</style>
</head>
<body style="overflow-x: hidden;">

	<div class="main-wrapper">
		<header>
		<nav>
			<div class="logo"><a href="#">LOGO</a></div>
			<ul>
				
				<li><a href="index.html">首页</a></li>
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
				<button id="addNew">新增博客</button>
				<div class="more">
					more
				</div>

			</div>
		</div>
		</header>

		<div class="conten">

			<section class="purple-section">
				<div class="wrapper">
					<div class="heading-wrapper">
						<h2>文章概览</h2>
						<div class="hr"></div>
						<div class="sub-heading">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in 
						</div>
					</div>

					<div class="card-group clearfix">
						<?php 
							$query = $db->query('select * from posts');
        					while ( $post =  $query->fetchObject() ) {
       				?>
						<div class="card">
							<input type="hidden" id="post-id" value="<?php print $post->id; ?>">
							<h3><?php echo $post->title; ?></h3>
							<p><?php echo substr($post->body,0,100); ?>
							</p>
							<p><?php echo date('Y-m-d',strtotime($post->created_at));?></p>
							<div class="control">
								<span><a href="modify.php?id=<?php echo $post->id; ?>">修改</a></span>
								<span><a href="delete.php?id=<?php echo $post->id; ?>">删除</a></span>
							</div>
						</div>

						
					<?php  } ?>	
						<!--div class="card">
							<h3>Another h3</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							</p>
						</div>
						<div class="card">
							<h3>Another h3</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							</p>
						</div>
						
						<div class="card">
							<h3>Another h3</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							</p>
						</div>
						<div class="card">
							<h3>Another h3</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							</p>
						</div>
						
						<div class="card">
							<h3>Another h3</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							</p>
						</div-->
					</div>
				</div>
			</section>
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
	<script type="text/javascript">
		var postId = document.getElementById('post-id');
		document.querySelector('.card h3').addEventListener('click',function(){
			window.location.href='article.php?id='+ postId.value;
		})
	</script>


</body>
</html>