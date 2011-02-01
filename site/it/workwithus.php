<?php
	$CURRENT_LEVEL = 1;
	$CURRENT_PAGE = 'workwithus';
	
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
									<a class="l-contactus-small" href="contacts.php">Contattaci ora</a>
								</div>
							</aside>
							<div class="content">
								<h2 class="first">Lavora con noi</h2>
								<p>
									Lo Studio Legale Bicecci & Partners ricerca persone competenti ed in sintonia con i suoi valori, capaci di contribuire con la loro professionalità, al raggiungimento di obiettivi comuni.
								</p>
								<p>
									Per segnalare la propria candidatura è necessario inviare il proprio curriculum vitae a <a class="mail-text" href="info" rel="nofollow"></a> o completare il form presente in questa pagina, autorizzando il trattamento dei propri dati personali nel rispetto della normativa sulla privacy.
								</p>
								<?php
								
									if (isset($_POST['submit'])){
										
										ini_set("SMTP", "localhost");
										$random_hash = md5(date('r', time()));
										
										$fileatt      = $_FILES['cv']['tmp_name'];     
										$fileatt_type = $_FILES['cv']['type'];     
										$fileatt_name = $_FILES['cv']['name'];
										
										$attachment = null;
										if (is_uploaded_file($fileatt)){
											$attachment = chunk_split(base64_encode(file_get_contents($fileatt)));
										}
										
										$fileattpap = null;	
										$fileatt_typepap = null;
										$fileatt_namepap = null;
										$attachmentpap = null;
										if(isset($_FILES['pap'])){
											$fileattpap      = $_FILES['pap']['tmp_name'];     
											$fileatt_typepap = $_FILES['pap']['type'];     
											$fileatt_namepap = $_FILES['pap']['name'];
											if (is_uploaded_file($fileattpap)){
												$attachmentpap = chunk_split(base64_encode(file_get_contents($fileattpap)));
											}
										}
										
										$subject = "Invio CV - dal sito";
										$to = $EMAIL_TO;
										
										$mime_boundary = "==Multipart_Boundary_x{$random_hash}x";
										
										$headers = 	"";
										$headers .= 'To: '.$_POST['name'].' <'.$to.'>' . "\r\n";
										$headers .= 'From: Studio Legale Bicecci e Partners <info@mblex.it>' . "\r\n";

										$headers .= "MIME-Version: 1.0\n" .
													"Content-Type: multipart/mixed; boundary=\"{$mime_boundary}\"";
													
										$message = 	"This is a multi-part message in MIME format.\n\n" .     
							            		   	"--{$mime_boundary}\n" .     
							            		   	"Content-Type: text/html; charset=\"iso-8859-1\"\n" .     
							            			"Content-Transfer-Encoding: 7bit\n\n" .     
							            			"<html>" .
													"<body>" .
													"<img src=\"http://www.invenium.it/studio_bicecci/logo_email/logo.jpg\" />" .
													"<h3>Invio CV</h3>" .
													"<p>Nome e Cognome: ".$_POST['name']."</p>" .
													"</body>" .
													"</html>" .
							            			"\n\n";
										
										$message .= "--{$mime_boundary}\n" .     
							             			"Content-Type: {$fileatt_type};\n" .     
							             			" name=\"{$fileatt_name}\"\n" .     
							             			"Content-Disposition: attachment;\n" .     
							             			" filename=\"{$fileatt_name}\"\n" .     
							             			"Content-Transfer-Encoding: base64\n\n" .     
							             			$attachment . 
							             			"\n\n";
							             			
							            if($attachmentpap != null) {
							            	$message .= "--{$mime_boundary}\n" .     
							             			"Content-Type: {$fileatt_typepap};\n" .     
							             			" name=\"{$fileatt_namepap}\"\n" .     
							             			"Content-Disposition: attachment;\n" .     
							             			" filename=\"{$fileatt_namepap}\"\n" .     
							             			"Content-Transfer-Encoding: base64\n\n" .     
							             			$attachmentpap . 
							             			"\n\n";   
							             }
							             $message .= "--{$mime_boundary}--\n";	

										if (mail("$to", "$subject", "$message", "$headers"))
											echo "<h3 class=\"flash-message flash-message-ok\">Richiesta inviata correttamente</h3>";
										else
											echo "<h3 class=\"flash-message flash-message-ko\">Si è verificato un errore nell'invio della mail. Prego riprovare più tardi.</h3>";
									}
								?>
								<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="workwithus-form" enctype="multipart/form-data">
									<ul class="form">
										<li class="field mandatory first">
											<label for="name">Nome e Cognome *</label>
											<input type="string" name="name" id="name"/>
										</li>
										<li class="field mandatory">
											<label for="email">Luogo e data di nascita *</label>
											<input type="email" name="email" id="email"/>
										</li>
										<li class="field mandatory">
											<label for="company">Codice fiscale *</label>
											<input type="string" name="company" id="company"/>
										</li>
										<li class="field">
											<label for="phone">Residenza e contatti (tel, cell, email) *</label>
											<input type="string" name="phone" id="phone"/>
										</li>
										<li class="field">
											<label for="address">Titolo di studio</label>
											<input type="string" name="address" id="address"/>
										</li>
										<li class="field mandatory">
											<label for="city">CV *</label>
											<input type="string" class="fake-file-value" disabled="disabled" />
											<input type="file" class="fake-file" name="cv" id="cv" />
										</li>
										<li class="field">
											<label for="job">Lettera di accompagnamento</label>
											<input type="string" class="fake-file-value" disabled="disabled" />
											<input type="file" class="fake-file" name="pap" id="pap"/>
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

<script>
	$('input[type=file]').change(function(event){
		$(this).prev('input.fake-file-value').val($(this).val().substring($(this).val().lastIndexOf('\\')+1));
	});
</script>