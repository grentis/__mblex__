<?php
	$CURRENT_PAGE = 'studio';
	$CURRENT_SUBPAGE = 'scatena';
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
											<li><a class="mail" href="scatena" rel="nofollow">Mail</a></li>
										</ul>
										<?php include_once('__aside_menu.php'); ?>
									</div>
									<a class="l-contactus-small" href="../contacts.php">Contattaci ora</a>	
								</div>
							</aside>
							<div class="content">
								<h2 class="first">I Professionisti</h2>
								<h4>Avv. Dario Scatena</h4>
								<h5>Junior Associate</h5>
								<p>
									Dario Scatena ha maturato esperienza nel settore della consulenza in favore di intermediari finanziari in particolare di SGR avente ad oggetto prodotti finanziari ed assicurativi, polizze Unit Linked, fondi pensione, Oicr italiani ed esteri, fondi speculativi e gestioni individuali di portafoglio. Dario affianca altresì intermediari finanziari nella gestione “day by day” di rapporti con la sua clientela con particolare riferimento alle intervenute modifiche dello status del cliente nel corso del rapporto. Dario si occupa anche della gestione del relativo contenzioso, sia in ambito giudiziale che stragiudiziale.
								</p>
								<h6>Esperienze professionali e formazione</h6>
								<p>
									Dario ha ricoperto posizione di legal advisor nella Direzione Affari Legali di Azimut Consulenza Sim SpA e nell’ufficio affari legali di Pioneer Investments Management SgrpA dal febbraio 2008.<br/>
									Dario ha, altresì, collaborato con le Prefetture in qualità di docente nella tenuta dei corsi sul decreto flussi 2007.<br/>
									Dario ha contestualmente svolto l’attività di agente in attività finanziaria per conto di una banca primaria italiana. Dario ha frequentato master in materia finanziaria ed in peace keeping and peace bulding.
									<ul>
										<li>2010 Corso in materia di sicurezza dei lavoratori</li>
										<li>2006 Master in finanza e mercati finanziari</li>
										<li>2004 Laurea presso l’Università di Pisa in diritto</li>
									</ul>
									Dario è iscritto come praticante presso l’Ordine degli Avvocati di Milano.
 								</p>
								<h6>Lingue</h6>
								<p>
									Italiano, Persiano(Farsi), Inglese e Francese
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