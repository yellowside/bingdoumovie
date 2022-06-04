<?php include_once 'header.php'; $play = play();?>
<!-- 播放页面 -->
<div class="list-contents">
	<div class="title">正在播放-<?php echo $play["title"]; ?></div>
	<div class="play-content">
		<iframe id="video" allowfullscreen="true" frameborder="no" height="500" width="100%" scrolling="no" src="<?php echo $data["jk"]; echo $play["video"]["0"]["url"];?>"></iframe>
	</div>
</div>
<div class="list-contents">
	<div class="title">
		数据资源：<span></span>
	</div>
	<div id="play-list">
		<?php foreach ($play["video"] as $val):?>
			<button id="button" type="button" onclick="javascript:plays('<?php echo $data["jk"]; echo $val["url"];?>')" title="<?php echo $val["title"];?>"><?php echo $val["title"];?></button>
		<?php endforeach;?>
	</div>
</div>
<div class="list-contents">
	<div class="title">剧情介绍</div>
	<div class="play-txt"><?php if(empty($play["des"])){?>暂无简介<?php }else{ ?><?php echo $play["des"];?><?php } ?></div>
</div>
<?php include_once 'footer.php'; ?>