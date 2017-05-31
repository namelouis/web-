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
		.pTime {
			font-style:italic;
		}

		.dTime
		{
			margin-top: 50px;
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
				<button onclick="window.location.href='preview.php'">文章概览</button>
				<div class="more">
					more
				</div>

			</div>
		</div>
		</header>

		<div class="content">
		 <?php        
		   	require_once '../inc/db.php';    
		    
		    $query = $db->prepare('select * from posts where id = :id');
		    $query->bindValue(':id',$_GET['id'],PDO::PARAM_INT);
		    $query->execute();
		    $post = $query->fetchObject();    
  		?>
			<div class="article">
				
				<div class="entry-header">
					<h2><?php echo $post->title; ?></h2>
				</div>
				
				<div class="hr"></div>

				<div class="entry-article">
					<p><?php echo $post->body; ?></p>
					<div class="dTime">
						<p class="pTime">创建于: <?php echo $post->created_at; ?></p>
					</div>
				</div>
				
				<div class="navigationbar">
					<span>Last Article</span>
					<span>Next Article</span>
				</div>
				
				<div class="comments">
					<h2>评论</h2>
					<ul>
				<?php
   	 $query = $db->query('select * from comments where post_id = ' . $_GET['id']);
    while ( $comment =  $query->fetchObject() ) {
  	?>
						<li>
							<div class="clearfix">
								<div class="useravatar">
									<img src="../img/avatar.jpg">
								</div>
								<div class="articlecommentsarea">
									<h4><?php echo $comment->title; ?></h4>
									<span><?php echo date('Y-m-d H:i:s',strtotime($comment->created_at));?></span>
									<p><?php echo $comment->body; ?></p>
								</div>
							</div>
						</li>
						<?php  } ?>
					</ul>
				</div>

				<div class="hr"></div>
				
				<div class="respond" >
					<h3>发表评论</h3>
					<form action="../comments/save.php" method="post" >
						<input type="hidden" name='post_id' value='<?php echo $_GET['id']; ?>'/>
						<label for="title">title</label>
						<input type="text" name="title" value="" />
						<p>
							
							<textarea id="comment" name="body"></textarea>
						</p>

						<input type="submit" name="commenttext" value="发表评论" class="submitinput">
					</form>
					
				</div>	

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
