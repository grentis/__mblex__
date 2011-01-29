<?php
	$CURRENT_LEVEL = 1;
	$CURRENT_PAGE = 'studio';
	
	require_once('php/local_conf.php');
?>

<!DOCTYPE HTML>
<html>
	<?php include_once('../template/__head.php'); ?>
	<!--[if IE]>
		<body class="it ie">
	<![endif]-->
	<!--[if !IE]>
		<body class="it">
	<![endif]-->
			<div class="container">
				<div class="main">
					<?php include_once('../template/__header.php'); ?>
					<section>
						<div class="section">
							<aside>
								<div class="aside">
									<div class="professionist">
										<h3 class="first last">I professionisti</h3>
										<ul>
											<li><a href="collaborators/bicecci.php">Avv. Stefania Bicecci &raquo;</a></li>
											<li><a href="collaborators/gangitano.php">Avv. Luca Gancitano &raquo;</a></li>
											<li><a href="collaborators/scatena.php">Avv. Dario Scatena &raquo;</a></li>
											<li><a href="collaborators/bienati.php">Avv. Giuseppe Bienati &raquo;</a></li>
										</ul>
									</div>
									<a class="l-contactus-small" href="contacts.php">Contattaci ora</a>
								</div>
							</aside>
							<div class="content">
								<h2 class="first">Lo Studio</h2>
								<p>
									Lo Studio Legale Bicecci & Partners fonde la ventennale esperienza professionale e le specifiche competenze di ciascun partner in diritto bancario, finanziario e societario, in ambito giudiziale e stragiudiziale.
								</p>
								<p>
									Elevato grado di specializzazione, capacità di gestire problematiche complesse e forte motivazione sono i punti di forza che consentono ai professionisti dello Studio Legale Bicecci & Partners di affiancare i loro clienti come un partner concreto, tempestivo ed efficiente.
								</p>
								<h2>I professionisti</h2>
								<p>
									I professionisti dello Studio Legale Bicecci & Partners mettono a disposizione dei propri clienti capacità personali, competenze specifiche consolidate nel corso di una ventennale esperienza e grande concretezza.
								</p>
								<p>
									Con disponibilità ed entusiasmo risolvono le problematiche dei propri clienti garantendo un approccio rapido, flessibile ed orientato ai risultati.
								</p>
								<p>
									Il loro spirito indipendente, serio, scevro da metodiche ed impostazioni tradizionalistiche consente ai professionisti dello Studio Legale Bicecci & Partners di affiancare quotidianamente i propri clienti divenendo l’interlocutore indispensabile di uffici legali interni e di responsabili di compliance e di aree operative.
								</p>
								<ul class="l-collaborators-list">
									<li><a href="collaborators/bicecci.php">Avv. Stefania Bicecci &raquo;</a></li>
									<li><a href="collaborators/gancitano.php">Avv. Luca Gancitano &raquo;</a></li>
									<li><a href="collaborators/scatena.php">Avv. Dario Scatena &raquo;</a></li>
									<li><a href="collaborators/bienati.php">Avv. Giuseppe Bienati &raquo;</a></li>
								</ul>
							</div>
							<div class="clear"></div>
						</div>
					</section>
				</div>
				<?php include_once('../template/__footer.php'); ?>
			</div>
		</body>
</html>