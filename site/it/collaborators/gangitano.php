<?php
	$CURRENT_PAGE = 'studio';
	$CURRENT_SUBPAGE = 'gangitano';
	$CURRENT_LEVEL = 2;

	require_once('../php/local_conf.php');
?>

<!DOCTYPE HTML>
<html>
	<?php include_once('../../template/__head.php'); ?>
	<!--[if IE ]>
		<body class="<?php echo $LANGUAGE ?> ie">
	<![endif]-->
	<!--[if !IE]>-->
		<body class="<?php echo $LANGUAGE ?>">
	<!--<![endif]-->
			<div class="container">
				<div class="main">
					<?php include_once('../../template/__header.php'); ?>
					<section>
						<div class="section">
							<aside>
								<div class="aside">
									<div class="professionist">
										<h3 class="first">Aree di specializzazione</h3>
										<ul>
											<li><a href="../expertise/dirsoccom.php">Diritto Societario e commerciale</a></li>
											<li><a href="../expertise/dirbanfin.php">Diritto Bancario</a></li>
										</ul>
										<h3>Contatti</h3>
										<ul>
											<li><a class="mail" href="gangitano" rel="nofollow">Mail</a></li>
										</ul>
										<?php include_once('__aside_menu.php'); ?>
									</div>
									<a class="l-contactus-small" href="../contacts.php">Contattaci ora</a>	
								</div>
							</aside>
							<div class="content">
								<h2 class="first">I Professionisti</h2>
								<h4>Avv. Luca Gangitano</h4>
								<h6>Esperienze professionali e formazione</h6>
								<p>
									xxx
 								</p>
								<h6>Associazioni</h6>
								<p>
									xxx
								</p>
								<h6>Lingue</h6>
								<p>
									xxx
								</p>
								<p class="add-margin"></p>
							</div>
							<div class="clear"></div>
						</div>
					</section>
				</div>
				<?php include_once('../../template/__footer.php'); ?>
			</div>
		</body>
</html>