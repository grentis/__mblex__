<div class="news">
	<?php include_once("../cms/inc/xmlFunc.php") ?>
	<h3>Alert informativi<a href="info.php"></a></h3>
	<?php foreach (array_slice(getNews(null,'../data/news.xml'), 0, 2) as $news) { ?>
		<?php $tem_descr = strip_tags($news['description']); ?>
		<article>
			<div class="article first">
				<h4><a href="info.php"><?php echo $news['title'] ?></a></h4>
				<p><?php echo (strlen($tem_descr) > $PREVIEW_NEWS_MAX_LENGTH)?substr($tem_descr,0,$PREVIEW_NEWS_MAX_LENGTH).' ...':$tem_descr ?></p>
			</div>
		</article>
	<?php } ?>
</div>