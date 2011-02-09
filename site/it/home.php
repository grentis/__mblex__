<?php
	$CURRENT_LEVEL = 1;
	$CURRENT_PAGE = 'home';
	
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
									<?php include_once('../template/__aside_news.php'); ?>
								</div>
							</aside>
							<div class="content">
								<h2 class="first">Bicecci & Partners</h2>
								<p>
									Il nostro Studio è ispirato ai più profondi valori professionali e personali: indipendenza, orientamento ai risultati, dinamicità, flessibilità.
								</p>
								<p>
									La nostra capacità di cogliere ogni più piccolo dettaglio senza mai perdere la visione d’insieme, la nostra attitudine a saperci adattare alle esigenze del cliente e, non ultima, la nostra propensione ad instaurare rapporti fiduciari durevoli nel tempo, fanno del nostro Studio una vera e propria boutique dove la clientela trova la risposta giusta e calibrata alle proprie esigenze.
								</p>
								<h2>Visione e missione</h2>
								<p>
									Lo studio legale Bicecci & Partners si propone come una realtà di riconosciuta esperienza, rinomata per competenza, serietà e disponibilità dei professionisti.
								</p>
								<p>
									Grazie alla struttura moderna, dinamica e veloce ed alle sinergie professionali e personali, i professionisti dello Studio Legale Bicecci & Partners sono in grado di accogliere e curare le molteplici richieste di banche, società finanziarie,  società quotate e non e piccole e medie imprese
								</p>
								<a href="contacts.php" class="l-contactus-big">Contattaci ora</a>
							</div>
							<div class="clear"></div>
						</div>
					</section>
				</div>
				<?php include_once('../template/__footer.php'); ?>
			</div>
		</body>
</html>