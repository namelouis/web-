<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Article</title>
	<link rel="shortcut icon" href="../img/logo.ico">
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/article.css">
	<style type="text/css">
	.content-modify 
	{
	    width: 1080px;
	    min-height: 600px;
	    margin: 100px auto;
	    background: #fff;
	    padding: 80px 90px;
	}
	
	.content-modify h2
	{
		text-align:center;
	}
	
	.content-modify .h3-1
	{
		height:30px;
		display: inline-block;
		margin-right: 30px;
	}
	.content-modify form
	{
		margin:100px:;
	}

	.content-modify form textarea
	{
		width:800px;
		height:500px;
		margin-top: 20px;
		padding-top: 10px;
		margin-bottom:30px;
	}

	.modify-input-title
	{
		padding:10px;
	}
	</style>

	<script type="text/javascript">
		
		window.onload = function(){
			var omain=document.querySelector('.main-wrapper');
			omain.style.display = 'block';
		}
	</script>
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
				<button>文章概览</button>
				<div class="more">
				</div>

			</div>
		</div>
		</header>
	<?php 
		require_once '../inc/db.php';
		$id = $_GET['id'];
	    $query = $db->prepare('select * from posts where id = :id');
	    $query->bindValue(':id',$id,PDO::PARAM_INT);
	    $query->execute();
	    $post = $query->fetchObject();    		
	?>
		<div class="content-modify">
			<h2>修改文章</h2>
			<form action="update.php" method="post">
				<input type="hidden" name="id" value = "<?php echo $id; ?>"/>
				<h3 class="h3-1">标题</h3>
				<input class="modify-input-title" type="text" name="title" value="<?php echo $post->title ?>"/>
				<h3>正文</h3>
				<textarea name="body">
					<?php echo $post->body; ?>
				</textarea>
				<br/>
				<input type="submit" value="提交" class="submitinput" />
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
