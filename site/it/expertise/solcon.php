<?php
	$CURRENT_PAGE = 'expertise';
	$CURRENT_SUBPAGE = 'solcon';
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
								<h2 class="first">Soluzione delle controversie</h2>
								<p>
									I professionisti dello Studio Legale Bicecci & Partners vantano una consolidata esperienza in tutte le aree del contenzioso commerciale -tra cui quello derivante da contrattualistica- e nelle materie del diritto societario e dei mercati finanziari, del diritto bancario, della concorrenza sleale,  della proprietà intellettuale, della responsabilità da prodotto, del diritto fallimentare, del diritto del lavoro.
							  </p>
								<p>
									La consolidata collaborazione con primari studi legali stranieri consente allo Studio Legale Bicecci & Partners di assistere i propri clienti in cross-border litigations, patrocinando direttamente i clienti stranieri in contenziosi italiani, fornendo alla propria clientela italiana la necessaria assistenza all'estero in loco e prestando consulenza in contenziosi pendenti all'estero in cui siano rilevanti profili di diritto italiano.
								</p>
								<h4>Contenzioso</h4>
								<p>
									Lo Studio Legale Bicecci & Partners offre assistenza in procedimenti giudiziali e arbitrali e nella negoziazione finalizzata alla prevenzione e/o risoluzione bonaria di controversie pendenti o potenziali.
								</p>
								<h4>Arbitrati</h4>
								<p>
									Gli Avvocati dello Studio Bicecci & Partners si occupano regolarmente di arbitrati nazionali ed internazionali.
								</p>
							</div>
							<div class="clear"></div>
						</div>
					</section>
				</div>
				<?php include_once('../../template/__footer.php'); ?>
			</div>
		</body>
</html>