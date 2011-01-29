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
									<article>
										<div class="article">
											<h5><date>14 gennaio 2010</date></h5>
											<h4>Legge 30 dicembre 2010, n. 240</h4>
											<p>
												Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
											</p>
										</div>
									</article>
									<article>
										<div class="article">
											<h5><date>14 gennaio 2010</date></h5>
											<h4>Legge 30 dicembre 2010, n. 240</h4>
											<p>
												Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
											</p>
										</div>
									</article>
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