<?php
	$CURRENT_LEVEL = 1;
	$CURRENT_PAGE = 'privacy';

	require_once('php/local_conf.php');
?>

<!DOCTYPE HTML>
<html>
	<?php include_once('../template/__head.php'); ?>
	<!--[if IE ]>
		<body class="<?php echo $LANGUAGE ?> ie <?php echo (isset($_GET['popup'])?"popup":"") ?>">
	<![endif]-->
	<!--[if !IE]>-->
		<body class="<?php echo $LANGUAGE ?> <?php echo (isset($_GET['popup'])?"popup":"") ?>">
	<!--<![endif]-->
			<div class="container">
				<div class="main">
					<?php include_once('../template/__header.php'); ?>
					<section>
						<div class="section">
							<aside></aside>
							<div class="content">
								<h2 class="first">Privacy</h2>
								<p>
									I dati contenuti nel Suo curriculum vitae saranno trattati secondo le modalità del decreto legislativo 30 giugno 2003 n. 196 “Codice in materia di protezione dei dati personali”.<br/>
   									Il titolare del trattamento è lo Studio Bicecci & Partners, con sede in Via Baretti, 1 (ang. P.za Duse) 20122 Milano. 
   								</p>
   								<p>
   									I dati saranno utilizzati per valutare possibilità di collaborazione con lo studio, come da Lei richiesto. A tal fine i dati potranno essere trattati con o senza l’ausilio di mezzi elettronici e/o telematici ed essere comunicati per le medesime finalità alle altre sedi di Bicecci & Partners.<br/>
									I dati contenuti nel curriculum saranno conservati per il periodo massimo di un anno. I dati anagrafici, le date dell’invio del curriculum e degli eventuali colloqui saranno conservati per un periodo massimo di tre anni. Il conferimento di tutti i dati è facoltativo. La invitiamo a trasmetterci soltanto dati relativi al suo percorso professionale e di studio. In particolare la invitiamo a non indicare nel curriculum dati sensibili (relativi, in particolare, a salute, convinzioni religiose o politiche, eccetera). Eventuali dati sensibili saranno immediatamente cancellati.
								</p>
								<p>
									Lei ha i diritti previsti dall’art. 7 del “Codice in materia di protezione dei dati personali”, tra cui il diritto di ottenere: la conferma dell’esistenza dei dati che la riguardano e la loro comunicazione; l’aggiornamento, la rettificazione, l’integrazione e la cancellazione dei medesimi. Potrà inoltre opporsi all’ulteriore trattamento dei suoi dati. Il responsabile del trattamento è ???????????, alla quale può rivolgersi, tramite l’indirizzo e-mail ??????????, per esercitare i diritti sopra indicati e per ottenere ulteriori informazioni.
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