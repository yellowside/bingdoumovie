<?php include 'header.php'; $item = item(); ?>
<!-- 首页 -->
<div class="list-contents">
	<div class="title"><?php if($_GET['wd']){?>搜索《<?php echo $_GET['wd'] ?>》结果如下<?php }else{?>最近更新<?php }?></div>
	<ul id="list">
		<?php if (!empty($item)): foreach($item as $value):?>
		<li>
		    <article>
				<a href="play.php?id=<?php echo $value["id"];?>"><img class="lazy" src="https://ae01.alicdn.com/kf/Hd464fb597ec54c9694a147ffb42c9b23x.gif" data-original="<?php echo $value["pic"];?>" alt="<?php echo $value["title"];?>"></a>
				<em><b>语言：<?php echo $value["note"];?></b></em>
				<h1><a href="play.php?id=<?php echo $value["id"];?>" title="<?php echo $value["title"];?>"><?php echo $value["title"];?></a></h1>
			</article>
		</li>
		<?php endforeach;else:?>
		    <p style="padding: 10px;">未获取到资源(⊙o⊙)？</p>
		<?php endif;?>
	</ul>
</div>
<?php include 'footer.php'; ?>