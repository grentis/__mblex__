<?php
	$CURRENT_LEVEL = 1;
	$CURRENT_PAGE = 'contacts';
	
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
								<form action="" method="post" id="contact-form">
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
													<input type="checkbox" name="html" value="dirbanfin" id="dirbanfin"/>
													<label for="dirbanfin">Diritto bancario e finanziario</label>
												</li>
												<li>
													<input type="checkbox" name="html" value="solcon" id="solcon"/>
													<label for="solcon">Soluzione delle controversie</label>
												</li>
												<li>
													<input type="checkbox" name="html" value="proint" id="proint"/>
													<label for="proint">Proprietà intellettuale</label>
												</li>
												<li>
													<input type="checkbox" name="html" value="priequi" id="priequi"/>
													<label for="priequi">Private Equity</label>
												</li>
												<li>
													<input type="checkbox" name="html" value="mea" id="mea"/>
													<label for="mea">M&A</label>
												</li>
												<li>
													<input type="checkbox" name="html" value="dirsoccom" id="dirsoccom"/>
													<label for="dirsoccom">Diritto societario e commerciale</label>
												</li>
											</ul>
										</li>
										<li class="field mandatory">
											<label for="message">Messaggio *</label>
											<textarea name="message" id="message"></textarea>
										</li>
									</ul>
									<input type="submit" value="submit" class="button" />
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