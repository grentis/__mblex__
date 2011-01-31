<?php
	$CURRENT_LEVEL = 1;
	$CURRENT_PAGE = 'info';
	
	require_once('php/local_conf.php');
?>

<!DOCTYPE HTML>
<html>
	<?php include_once('../template/__head.php'); ?>
	<!--[if IE]>
		<body class="it ie">
	<![endif]-->
	<!--[if !IE]>
		<body class="it">
	<![endif]-->
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
									<?php foreach (getNews(null,'../data/news.xml') as $news) { ?>
										<article>
											<div class="article">
												<h5><date><?php echo $news['date'] ?></date></h5>
												<h4><?php echo $news['title'] ?></h4>
												<p>
													<?php echo $news['description'] ?>
												</p>
											</div>
										</article>
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