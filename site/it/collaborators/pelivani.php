<?php
	$CURRENT_PAGE = 'studio';
	$CURRENT_SUBPAGE = 'pelivani';
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
											<li><a class="mail" href="pelivani" rel="nofollow">Mail</a></li>
										</ul>
										<?php include_once('__aside_menu.php'); ?>
									</div>
									<a class="l-contactus-small" href="../contacts.php">Contattaci ora</a>	
								</div>
							</aside>
							<div class="content">
								<h2 class="first">I Professionisti</h2>
								<h4>Dott.ssa Edlira Pelivani</h4>
								<h5>Junior associate</h5>
								<h6>Esperienze professionali e formazione</h6>
								<p>
									Edlira Pelivani ha iniziato ad acquisire esperienza nel settore del diritto civile, commerciale e delle assicurazioni iniziando la sua pratica forense dopo il conseguimento della Laurea Magistrale a Ciclo Unico presso l’Università Statale di Milano il 1 luglio 2010. In particolare, Edlira si occupa di approfondire tematiche per pareri, atti giudiziari e altro anche in materie di LPS e LS in Italia e per società aventi sede legale all’estero.
 								</p>
								<p>
									Edlira, una volta laureata ha iniziato a svolgere la pratica forense nello Studio legale Cocuzza e Associati – Milano e nello stesso periodo ha collaborato con lo Studio legale Albina Candian & Partners - Milano.
									<ul>
										<li>2010 Laurea in Diritto privato comparato - Prof. ssa Albina Candian - relativa alla “Comparazione della tutela del consumatore tra il sistema italiano ed albanese”.</li>
									</ul>
									Edlira è iscritta dal 2010 come praticante presso l’Ordine degli Avvocati di Milano.
								</p>
								<h6>Lingue</h6>
								<p>
									Italiano, Inglese, Albanese (madrelingua)
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