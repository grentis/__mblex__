<?php
	$CURRENT_LEVEL = 1;
	$CURRENT_PAGE = 'info';
	
	require_once('php/local_conf.php');
?>

<!DOCTYPE HTML>
<html>
	<?php include_once('../template/__head.php'); ?>
	<!--[if IE ]>
		<body class="<?php echo $LANGUAGE ?> ie">
	<![endif]-->
	<!--[if !IE]>-->
		<body class="<?php echo $LANGUAGE ?>">
	<!--<![endif]-->
			<div class="container">
				<div class="main">
					<?php include_once('../template/__header.php'); ?>
					<section>
						<div class="section">
							<aside>
								<div class="aside">
									<?php include_once('../template/__aside_where.php'); ?>
									<a class="l-contactus-small" href="contacts.php">Contattaci ora</a>
								</div>
							</aside>
							<div class="content">
								<h2 class="first">Lo studio informa</h2>
								<div class="news">
									<?php include_once("../cms/inc/xmlFunc.php") ?>
									<?
										$id = null;
										if (isset($_GET['news_id']) && $_GET['news_id'] != null)
											$id = $_GET['news_id'];
											
									?>
									<?php foreach (getNews($id,'../data/news.xml') as $news) { ?>
										<article>
											<div class="article">
												<h5><date><?php echo $news['date'] ?></date></h5>
												<a href="<?=$_SERVER['PHP_SELF']."?news_id=".$news['id']?>">
													<h4><?php echo $news['title'] ?></h4>
												</a>
												<? if ($id != null) $PREVIEW_NEWS_MAX_LENGTH = 1000000; ?>													
												<p>
													<?php echo (strlen($news['description']) > $PREVIEW_NEWS_MAX_LENGTH)?substr($news['description'],0,$PREVIEW_NEWS_MAX_LENGTH).' ...':$news['description'] ?>
												</p>
												
											</div>
										</article>
										<? if ($id != null) {?><a class="link-back" href="<?=$_SERVER['PHP_SELF']?>">&laquo; Back</a><?} ?>
									<?php } ?>
								</div>
							</div>
							<div class="clear"></div>
						</div>
					</section>
				</div>
				<?php include_once('../template/__footer.php'); ?>
			</div>
		</body>
</html>