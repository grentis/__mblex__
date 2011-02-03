<?php
	$CURRENT_PAGE = 'expertise';
	$CURRENT_SUBPAGE = 'dirsoccom';
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
									<?php include_once('__aside_menu.php'); ?>
									<a class="l-contactus-small" href="../contacts.php">Contattaci ora</a>
								</div>
							</aside>
							<div class="content">
								<h2 class="first">Diritto societario e commerciale</h2>
								<p>
									Lo studio Legale Bicecci & Partners offre consulenza a società italiane ed estere in tutte le questioni riguardanti il diritto societario assistendo la propria clientela anche nei procedimenti giudiziali.
								</p>
								<p>
									Il cliente trova all’interno dello Studio Legale Bicecci & Partners, professionisti proattivi e competenti, sia in relazione alla gestione delle problematiche quotidiane (quali questioni di corporate governance e negoziazione di patti parasociali tra soci, anche investitori finanziari, ottemperanza ai regolamenti Consob e altre questioni di compliance), sia in relazione ad operazioni societarie strategiche (quali operazioni di M&A, operazioni sul mercato dei capitali, programmi di remunerazione del management o operazioni di ricapitalizzazione).
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