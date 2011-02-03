<?php
	$CURRENT_LEVEL = 1;
	$CURRENT_PAGE = 'contacts';
	
	require_once('php/local_conf.php');
?>

<!DOCTYPE HTML>
<html>
	<?php include_once('../template/__head.php'); ?>
	<!--[if IE 7]>
		<body class="<?php echo $LANGUAGE?> ie ie7">
	<![endif]-->
	<!--[if IE]>
		<body class="<?php echo $LANGUAGE?> ie">
	<![endif]-->
	<!--[if !IE]>-->
		<body class="<?php echo $LANGUAGE?>">
	<!--<![endif]-->
			<div class="container">
				<div class="main">
					<?php include_once('../template/__header.php'); ?>
					<section>
						<div class="section">
							<aside>
								<div class="aside">
									<?php include_once('../template/__aside_where.php'); ?>
									<div class="google_map" id="google_map"></div>
									<a target="_blank" class="map" href="http://maps.google.it/maps?f=q&amp;source=embed&amp;hl=it&amp;geocode=&amp;q=via+baretti+1+milano&amp;aq=&amp;sll=41.442726,12.392578&amp;sspn=25.512085,39.506836&amp;ie=UTF8&amp;hq=&amp;hnear=Via+Giuseppe+Baretti,+20122+Milano,+Lombardia&amp;t=h&amp;ll=45.471568,9.205256&amp;spn=0.017876,0.01708&amp;z=14&amp;iwloc=A">Visualizzazione ingrandita della mappa</a>
								</div>
							</aside>
							<div class="content">
								<h2 class="first">Contatti</h2>
								<p>
									Per maggiori informazioni e per sottoporci le vostre domande compilate il form qui di seguito e sarete al più presto ricontattati da un nostro collaboratore.<br/>
									Grazie.
								</p>
								<?php
								
									if (isset($_POST['submit'])){
										ini_set("SMTP", "localhost");
										
										$subject = "Richiesta maggiori informazioni - dal sito";
										$to = $EMAIL_TO;
										
										$message = "<html>";
										$message .= "<body>";
										$message .= "<img src=\"http://www.invenium.it/studio_bicecci/logo_email/logo.jpg\" />";
										$message .= "<h3>";
										$message .= "Richiesta maggiori informazioni:";	
										$message .= "</h3>";
										$message .= "<p>Nome e Cognome: ".$_POST['name']."</p>";
										$message .= "<p>Email: ".$_POST['email']."</p>";
										$message .= "<p>Azienda/Studio: ".$_POST['company']."</p>";
										if (isset($_POST['phone']))
											$message .= "<p>Telefono: ".$_POST['phone']."</p>";
										if (isset($_POST['address']))
											$message .= "<p>Indirizzo (n° civico, CAP): ".$_POST['address']."</p>";
										$message .= "<p>Professione: ".$_POST['job']."</p>";
										
										if (isset($_POST['html'])) {
											$message .= "<p>Focus/Area di practice</p><ul>";
											foreach ($_POST['html'] as $check) {
												$message .= "<li>".$check."</li>";												
											}
											$message .= "</ul>";
										}
										
										$message .= "<p>Messaggio: ".$_POST['message']."</p>";
										$message .= "</body>";
										$message .= "</html>";
										
										// To send HTML mail, the Content-type header must be set
										$headers  = 'MIME-Version: 1.0' . "\r\n";
										$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

										// Additional headers
										$headers .= 'To: '.$_POST['name'].' <'.$to.'>' . "\r\n";
										$headers .= 'From: Studio Legale Bicecci e Partners <info@mblex.it>' . "\r\n";
										
										if (mail("$to", "$subject", "$message", "$headers"))
											echo "<h3 class=\"flash-message flash-message-ok\">Richiesta inviata correttamente</h3>";
										else
											echo "<h3 class=\"flash-message flash-message-ko\">Si è verificato un errore nell'invio della mail. Prego riprovare più tardi.</h3>";
									}								
								?>
								<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="contact-form">
									<ul class="form">
										<li class="field mandatory first">
											<label for="name">Nome e Cognome *</label>
											<input type="string" name="name" id="name"/>
										</li>
										<li class="field mandatory">
											<label for="email">E-mail *</label>
											<input type="email" name="email" id="email"/>
										</li>
										<li class="field mandatory">
											<label for="company">Azienda/Studio *</label>
											<input type="string" name="company" id="company"/>
										</li>
										<li class="field">
											<label for="phone">Telefono</label>
											<input type="string" name="phone" id="phone"/>
										</li>
										<li class="field">
											<label for="address">Indirizzo (n° civico, CAP)</label>
											<input type="string" name="address" id="address"/>
										</li>
										<li class="field">
											<label for="city">Città (nazione)</label>
											<input type="string" name="city" id="city"/>
										</li>
										<li class="field mandatory">
											<label for="job">Professione *</label>
											<input type="string" name="job" id="job"/>
										</li>
										<li class="field">
											<span class="checkbox-title">Focus/Area di practice</span>
											<ul class="checkbox">
												<li>
													<input type="checkbox" name="html[]" value="Diritto bancario e finanziario" id="dirbanfin"/>
													<label for="dirbanfin">Diritto bancario e finanziario</label>
												</li>
												<li>
													<input type="checkbox" name="html[]" value="M&A - Private Equity" id="mea"/>
													<label for="mea">M&A - Private Equity</label>
												</li>
												<li>
													<input type="checkbox" name="html[]" value="Diritto societario e commerciale" id="dirsoccom"/>
													<label for="dirsoccom">Diritto societario e commerciale</label>
												</li>
												<li>
													<input type="checkbox" name="html[]" value="Diritto industriale e proprietà intellettuale – Diritto Penale commerciale e Diritto del lavoro" id="priequi"/>
													<label for="priequi">Diritto industriale e proprietà intellettuale – Diritto Penale commerciale e Diritto del lavoro</label>
												</li>
												<li>
													<input type="checkbox" name="html[]" value="Soluzione delle controversie" id="solcon"/>
													<label for="solcon">Soluzione delle controversie</label>
												</li>												
											</ul>
										</li>
										<li class="field mandatory">
											<label for="message">Messaggio *</label>
											<textarea name="message" id="message"></textarea>
										</li>
										<li class="field mandatory privacy">
											<label for="privacy">Autorizzo ai sensi del D. Lgs. 30 Giugno 2003 n. 196 il trattamento dei dati personali trasmessi.</label>
											<input type="checkbox" name="privacy" value="true" id="privacy"/>
											
										</li>
									</ul>
									<input type="submit" value="submit" name="submit" class="button" />
								</form>
							</div>
							<div class="clear"></div>
						</div>
					</section>
				</div>
				<?php include_once('../template/__footer.php'); ?>
			</div>
		</body>
</html>