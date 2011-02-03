<?php
	$CURRENT_LEVEL = 1;
	$CURRENT_PAGE = 'disclaimer';

	require_once('php/local_conf.php');
?>

<!DOCTYPE HTML>
<html>
	<?php include_once('../template/__head.php'); ?>
	<!--[if IE ]>
		<body class="<?php echo $LANGUAGE ?> ie popup">
	<![endif]-->
	<!--[if !IE]>-->
		<body class="<?php echo $LANGUAGE ?> popup">
	<!--<![endif]-->
			<div class="container">
				<div class="main">
					<?php include_once('../template/__header.php'); ?>
					<section>
						<div class="section">
							<aside></aside>
							<div class="content">
								<h2 class="first">Disclaimer</h2>
								<p>
									Il contenuto del presente sito Web è a scopo esclusivamente informativo e non può essere considerato esaustivo, né fornire parere legale o altro tipo di consulenza professionale, né è inteso a fini commerciali o di relazione o di transazione con i clienti.
								</p>
								<p>
									Lo Studio Bicecci & Partners declina ogni responsabilità in merito ad azioni od omissioni basate sull’utilizzo delle informazioni e degli articoli contenuti nel presente sito. Lo Studio Bicecci & Partners non è responsabile per, né di per sé approva, i contenuti forniti da terzi accessibili dal presente sito.
								</p>
								<p>
									Studio Bicecci & Partners sono marchi di proprietà esclusiva di Studio Bicecci & Partners e sono protetti dalle leggi applicabili. I contenuti del presente sito sono protetti da diritto di autore in base alle disposizioni delle convenzioni internazionali.
								</p>
								<p>
									Lo Studio Bicecci & Partners opera come associazione professionale in base alla legge italiana. La sede di Londra viene gestita attraverso una Limited Liability Partnership inglese e fornisce servizi legali regolati dalla Solicitor Regulation Authority; gli avvocati della suddetta sede sono registrati presso la Solicitor Regulation Authority come Registered European Lawyers. Pur non autorizzata in base al Financial Services and Markets Act 2000, la sede di Londra è regolata dalla Solicitor Regulation Authority e quindi, in alcune circostanze, è abilitata ad offrire servizi di investimento selezionati.
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