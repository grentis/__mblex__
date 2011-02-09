<?php
	$CURRENT_PAGE = 'studio';
	$CURRENT_SUBPAGE = 'bienati';
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
											<li><a class="mail" href="bienati" rel="nofollow">Mail</a></li>
										</ul>
										<?php include_once('__aside_menu.php'); ?>
									</div>
									<a class="l-contactus-small" href="../contacts.php">Contattaci ora</a>	
								</div>
							</aside>
							<div class="content">
								<h2 class="first">I Professionisti</h2>
								<h4>Avv. Giuseppe Bienati</h4>
								<h5>Off Counsel</h5>
								<p>
									Giuseppe Bienati, avvocato penalista, assiste sia imprenditori, dirigenti, preposti, sia imprese principalmente, ma non esclusivamente, in sede giudiziale.
								</p>
								<p>
									Giuseppe assiste le persone fisiche nei procedimenti penali nei quali si trovino coinvolti sia in qualità di indagati/imputati, sia in veste di persone offese/ parti civili; difende, inoltre, le imprese coinvolte in tali procedimenti quali responsabili civili e/o a titolo di responsabilità amministrativa ai sensi del D. L.vo. 231/2001.
								</p>
								<p>
									L’attività di assistenza-difesa viene garantita in tutte le fasi processuali, anche con riferimento all’espletamento di investigazioni difensive.
								</p>
								<p>
									Giuseppe consiglia il cliente nelle scelte strategico-difensive, predisponendo le produzioni documentali, le indicazioni testimoniali, fornendo pareri in ordine alla scelta di riti alternativi (patteggiamento,giudizio abbreviato) e in merito ad eventuali impugnazioni.
								</p>
								<p>
									Giuseppe ha maturato un’esperienza pluriventennale di assistenza alle imprese nell’ambito, fra l’altro, dei reati societari, di quelli fallimentari, della normativa in materia di usura e degli altri reati contro il patrimonio; da sempre, si occupa anche della normativa a tutela dell’ambiente e di quella relativa alla prevenzione degli infortuni sul lavoro e delle malattie professionali.
								</p>
								<p>
									In ambito stragiudiziale, oltre a coadiuvare i colleghi civilisti fornendo consulenze in ipotesi di coesistenza di problematiche penali, ha acquisito esperienza nella redazione e gestione dei modelli di comportamento di cui al D. L.vo. 231/2001 e con riferimento all’espletamento degli obblighi normativi (regimi autorizzativi e redazione documenti) di cui alla legislazione a tutela dell’ambiente e per la prevenzione degli infortuni sul lavoro e delle malattie professionali.
								</p>
								<h6>Esperienze professionali e formazione</h6>
								<p>
									Già titolare di un proprio studio dal 1998, collabora come consulente esterno con Studio Bicecci & Partners. Dal conseguimento della laurea al 1998, ha lavorato presso primario studio di Milano ove ha maturato l’esperienza negli ambiti sopra indicati.
								</p>
								<p>
									1988 laurea in giurisprudenza all’Università degli Studi di Milano
								</p>
								<p>
									Iscritto all’Ordine degli Avvocati di Milano dal 1993.
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