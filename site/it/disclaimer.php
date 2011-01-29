<?php
	$CURRENT_LEVEL = 1;
	$CURRENT_PAGE = 'disclaimer';

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
							<aside></aside>
							<div class="content">
								<h2 class="first">Disclaimer</h2>
								<p>
									Il materiale contenuto in questo sito web è da considerarsi destinato a fornire esclusivamente informazioni generali sullo Studio e non costituisce prestazione di consulenza legale o di servizi di altro genere. Decliniamo ogni responsabilità per l’utilizzo, a qualunque titolo e per qualsivoglia motivo, delle informazioni contenute in questo sito.
								</p>
							</div>
							<div class="clear"></div>
						</div>
					</section>
				</div>
				<?php include_once('../template/__footer.php'); ?>
			</div>
		</body>
</html>