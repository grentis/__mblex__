<?php
	$CURRENT_PAGE = 'studio';
	$CURRENT_SUBPAGE = 'gancitano';
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
											<li><a class="mail" href="gancitano" rel="nofollow">Mail</a></li>
										</ul>
										<?php include_once('__aside_menu.php'); ?>
									</div>
									<a class="l-contactus-small" href="../contacts.php">Contattaci ora</a>	
								</div>
							</aside>
							<div class="content">
								<h2 class="first">I Professionisti</h2>
								<h4>Avv. Luca Gancitano</h4>
								<h5>Senior Associate</h5>
								<p>
									Luca Gancitano assiste la clientela dello Studio principalmente nell’ambito del diritto bancario gestendo pratiche – sia in fase giudiziale che stragiudiziale – aventi ad oggetto ogni aspetto problematico di rapporti bancari di vario tipo. Luca si occupa, anche, di contratti di agenzia e di promozione d’affari e in generale, di revisione dei modelli contrattuali in uso. Luca ha, altresì, maturato esperienza in materia di diritto fallimentare e di diritto immobiliare (in particolare in materia di mediazione immobiliare e procacciamento d’affari).
								</p>
								<h6>Esperienze professionali e formazione</h6>
								<p>
									Luca ha collaborato con un primario studio legale con sede in Roma e Milano che si occupa di diritto dei mercati finanziari. Ha, altresì, ricoperto la posizione di legale in house presso l’ufficio legale di una primaria banca tedesca con sede in Italia. In precedenza ha collaborato, prima come praticante avvocato poi come avvocato, con un noto studio legale milanese, svolgendo prevalentemente, attività nell’ambito del diritto civile.
									<ul>
										<li>2004: Diploma di Specializzazione in Professioni Legali presso l’Università Cattolica del Sacro Cuore di Milano.</li>
										<li>2002: Laurea in giurisprudenza presso l’Università degli Studi di Palermo.</li>
									</ul>
									Iscritto presso l’Ordine degli Avvocati di Milano.
 								</p>
								<h6>Lingue</h6>
								<p>
									Italiano, Inglese.
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