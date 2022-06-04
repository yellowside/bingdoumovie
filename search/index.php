<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="UTF-8">
		<meta name="renderer" content="webkit"/>
		<meta name="force-rendering" content="webkit"/>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>搜索【<?php echo($_REQUEST['wd']);?>】的结果 | 冰豆影院 - 全能影视搜索引擎</title>
		<meta name="keywords" content="冰豆影院,电影搜索,冰豆电影搜索,影视搜索,全能影视搜索" />
		<meta name="description" content="冰豆影院是一款全能影视搜索引擎，帮你找到最新影视资源，一站拥有无尽影视资源，下载最新影视资源，下载全集版影视资源。" />
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	<header class="white-header">
				<nav class="super-search-nav-2">
					<a href="/" class="super-search-logo-2"><div class="logo">影视搜索</div></a>
					<div class="super-search-form super-search-form-2">
						<div class="super-search-input-box super-search-input-box-2">
							<form id="formsearch" action="/search/" method="get"><input class="super-search-input super-search-input-2" type="text" name="wd" value="<?php echo($_REQUEST['wd']);?>" placeholder="请输入搜索关键字">
							<button type="submit" class="search-btn">立即搜索</button>
							</form>
							<div class="super-search-hot-box super-search-source">
								<span>切换搜索源：</span>
								<a class="super-search-source-item" href="https://www.misige.cn/list/search/?keyword=<?php echo($_REQUEST['wd']);?>" target="iframe-player">米思阁</a>
								<a class="super-search-source-item" href="https://www.txjys.com/vodsearch/-------------.html?wd=<?php echo($_REQUEST['wd']);?>" target="iframe-player">飘花影院</a>
								<a class="super-search-source-item" href="https://v.wweebb.cn/index.php/vod/search.html?wd=<?php echo($_REQUEST['wd']);?>" target="iframe-player">简影音</a>
								<a class="super-search-source-item" href="https://www.dianyinggou.com/so/<?php echo($_REQUEST['wd']);?>" target="iframe-player">电影狗</a>
								<a class="super-search-source-item" href="https://dsxys.com/sb/ke7nhZe3c1-.html?wd=<?php echo($_REQUEST['wd']);?>&submit=" target="iframe-player">大师兄影视</a>
								<a class="super-search-source-item" href="https://www.jlmjzz.com/search/<?php echo($_REQUEST['wd']);?>.html" target="iframe-player">注视影视</a>
								<a class="super-search-source-item" href="https://alitv.icu/index.php/search.html?key=<?php echo($_REQUEST['wd']);?>" target="iframe-player">阿狸TV</a>
								
							</div>
						</div>
					</div>
				</nav>
			</header>
			<div class="super-search-iframe-box"><iframe class="super-search-iframe" name="iframe-player" rameborder="0" marginwidth="0" marginheight="0" allowfullscreen="true" allowtransparency="true" src="https://www.misige.cn/list/search/?keyword=<?php echo($_REQUEST['wd']);?>"></iframe></div>
<script src="https://cdn.bingdou.vip/gh/yellowside/jquery/b.js" charset="utf-8"></script>
</body>
</html>