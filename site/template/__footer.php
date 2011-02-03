<footer>
	<div class="footer">
		<nav>
			<ul class="nav">
				<li class="home first <?php echo ($CURRENT_PAGE == 'home')?'current':'' ?>"><a href="<?php echo createPATH($CURRENT_LEVEL) ?>home.php" title="<?php echo $KEY[$LANGUAGE]['HOME'] ?>"><span><?php echo strtoupper($KEY[$LANGUAGE]['HOME']) ?></span></a></li>
				<li class="studio <?php echo ($CURRENT_PAGE == 'studio')?'current':'' ?>"><a href="<?php echo createPATH($CURRENT_LEVEL) ?>studio.php" title="<?php echo $KEY[$LANGUAGE]['STUDIO'] ?>"><span><?php echo strtoupper($KEY[$LANGUAGE]['STUDIO']) ?></span></a></li>
				<li class="expertise <?php echo ($CURRENT_PAGE == 'expertise')?'current':'' ?>"><a href="<?php echo createPATH($CURRENT_LEVEL) ?>expertise.php" title="<?php echo $KEY[$LANGUAGE]['EXPERTISE'] ?>"><span><?php echo strtoupper($KEY[$LANGUAGE]['EXPERTISE']) ?></span></a></li>
				<li class="network <?php echo ($CURRENT_PAGE == 'network')?'current':'' ?>"><a href="<?php echo createPATH($CURRENT_LEVEL) ?>network.php" title="<?php echo $KEY[$LANGUAGE]['NETWORK'] ?>"><span><?php echo strtoupper($KEY[$LANGUAGE]['NETWORK']) ?></span></a></li>
				<li class="info <?php echo ($CURRENT_PAGE == 'info')?'current':'' ?>"><a href="<?php echo createPATH($CURRENT_LEVEL) ?>info.php" title="<?php echo $KEY[$LANGUAGE]['INFO'] ?>"><span><?php echo strtoupper($KEY[$LANGUAGE]['INFO']) ?></span></a></li>
				<li class="workwithus <?php echo ($CURRENT_PAGE == 'workwithus')?'current':'' ?>"><a href="<?php echo createPATH($CURRENT_LEVEL) ?>workwithus.php" title="<?php echo $KEY[$LANGUAGE]['WORKWITHUS'] ?>"><span><?php echo strtoupper($KEY[$LANGUAGE]['WORKWITHUS']) ?></span></a></li>
				<li class="contacts <?php echo ($CURRENT_PAGE == 'contacts')?'current':'' ?>"><a href="<?php echo createPATH($CURRENT_LEVEL) ?>contacts.php" title="<?php echo $KEY[$LANGUAGE]['CONTACTS'] ?>"><span><?php echo strtoupper($KEY[$LANGUAGE]['CONTACTS']) ?></span></a></li>
				<li class="privacy <?php echo ($CURRENT_PAGE == 'privacy')?'current':'' ?>"><a href="javascript:window.open('<?php echo createPATH($CURRENT_LEVEL) ?>privacy.php','privacy','top=30,left=30,width=400,height=500,status=no,menubar=no,toolbar=no,scrollbar=no')" title="<?php echo $KEY[$LANGUAGE]['PRIVACY'] ?>"><span><?php echo strtoupper($KEY[$LANGUAGE]['PRIVACY']) ?></span></a></li>
				<li class="disclaimer last <?php echo ($CURRENT_PAGE == 'disclaimer')?'current':'' ?>"><a href="javascript:window.open('<?php echo createPATH($CURRENT_LEVEL) ?>disclaimer.php',disclaimer','top=30,left=30,width=400,height=500,status=no,menubar=no,toolbar=no,scrollbar=no')" title="<?php echo $KEY[$LANGUAGE]['DISCLAIMER'] ?>"><span><?php echo strtoupper($KEY[$LANGUAGE]['DISCLAIMER']) ?></span></a></li>
			</ul>
		</nav>
		<div class="company-details">
			Studio Legale Bicecci &amp; Partners - Via Baretti, 1 (ang. P.za Duse) 20122 Milano - Tel. 02 89 658 658 - Fax 02 45 495 819<br/>
			Viale Bruno Buozzi, 53 - 00197 Roma -  info@mblex.it - P.IVA 12519000157
		</div>
	</div>
</footer>