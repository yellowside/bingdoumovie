<?php
define('APP_ROOT', dirname(__FILE__));
/*加载函数库*/
require_once APP_ROOT.'/data/function.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title><?php if($_GET['wd']){?>正在搜索<?php echo $_GET['wd'] ?><?php }else if($_GET['id']){?>正在播放<?php echo play()["title"]; ?><?php }else{echo $data["title"];}?>- <?php echo $data["site"]; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="keywords" content="<?php echo $data["keywords"]; ?>">
<meta name="description" content="<?php echo $data["describe"]; ?>">
<link rel="stylesheet" href="https://cdn.bingdou.vip/gh/yellowside/6/bingdoumovie/so/css/style.css">
<link rel="stylesheet" href="https://lib.baomitu.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://lib.baomitu.com/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
<!-- 内容 -->
<div class="container">
	<div class="content">
	    <div class="logo"><a href="/so/">影视搜索</a></div>
		<div id="search">
		    <form action="/so/" method="GET">
			    <input type="text" name="wd" id="wd" placeholder="输入关键词" value="" autocomplete="off">
				<button id="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>