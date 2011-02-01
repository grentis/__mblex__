<?php
	$LANGUAGE = 		'it';
	
	$KEY['it'] = array(
					'HOME' 		=> 'Home',
					'STUDIO' 	=> 'Studio',
					'EXPERTISE' => 'Expertise',
					'NETWORK'	=> 'La rete',
					'INFO'		=> 'Info',
					'WORKWITHUS'=> 'Lavora con noi',
					'CONTACTS'	=> 'Contatti',
					'PRIVACY'	=> 'Privacy',
					'DISCLAIMER'=> 'Disclaimer',
					'DIRIND'	=> 'Diritto industriale e proprietà intellettuale – Diritto Penale commerciale e Diritto del lavoro',
					'PRIEQUI'	=> 'M&A - Private Equity',
					'DIRBANFIN'	=> 'Diritto bancario e finanziario',
					'DIRSOCCOM' => 'Diritto societario e commerciale',
					'SOLCON'	=> 'Soluzione delle controversie',
					'BIENATI'	=> 'Giuseppe Bienati',
					'GANGITANO'	=> 'Luca Gancitano',
					'BICECCI'	=> 'Stefania Bicecci',
					'SCATENA'	=> 'Dario Scatena',
					
					'DESCRIPTION_TAG'	=> 'Lo Studio Legale Bicecci & Partners fonde la ventennale esperienza professionale e le specifiche competenze di ciascun partner in diritto bancario, finanziario e societario, in ambito giudiziale e stragiudiziale',
					'KEYWORD_TAG'		=> 'studio legale, bicecci, blex, diritto bancario, diritto finanziario, diritto societario',
					'WHERE'				=> 'Dove siamo'
				);
				
	$KEY['en'] = array(
					'HOME' 		=> 'Home',
					'STUDIO' 	=> 'Studio',
					'EXPERTISE' => 'Expertise',
					'NETWORK'	=> 'Network',
					'INFO'		=> 'Info',
					'WORKWITHUS'=> 'Work with us',
					'CONTACTS'	=> 'Contats',
					'PRIVACY'	=> 'Privacy',
					'DISCLAIMER'=> 'Disclaimer',
					'DIRIND'	=> 'Bicecci & Partners',
					'PRIEQUI'	=> 'M&A - Private Equity',
					'DIRBANFIN'	=> 'Bicecci & Partners',
					'DIRSOCCOM' => 'Bicecci & Partners',
					'SOLCON'	=> 'Bicecci & Partners',
					'BIENATI'	=> 'Giuseppe Bienati',
					'GANGITANO'	=> 'Luca Gancitano',
					'BICECCI'	=> 'Stefania Bicecci',
					'SCATENA'	=> 'Dario Scatena',
					
					'DESCRIPTION_TAG'	=> 'Lo Studio Legale Bicecci & Partners fonde la ventennale esperienza professionale e le specifiche competenze di ciascun partner in diritto bancario, finanziario e societario, in ambito giudiziale e stragiudiziale',
					'KEYWORD_TAG'		=> 'studio legale, bicecci, blex, diritto bancario, diritto finanziario, diritto societario',
					'WHERE'				=> 'Where'
				);
			
	$PREVIEW_NEWS_MAX_LENGTH = 110;
	
	$EMAIL_TO = 'grentis@gmail.com';
	
	function createPATH($level){
		$res = '';
		for($i = 1; $i < $level; ++$i){
			$res = $res.'../';
		}
		return $res;
	}
	
?>