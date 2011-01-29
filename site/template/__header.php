<header>
	<div class="header">
		<nav>
			<ul class="nav">
				<li class="studio first <?php echo ($CURRENT_PAGE == 'studio')?'current':'' ?>"><a href="<?php echo createPATH($CURRENT_LEVEL) ?>studio.php" title="<?php echo $KEY[$LANGUAGE]['STUDIO'] ?>"><span><?php echo $KEY[$LANGUAGE]['STUDIO'] ?></span></a></li>
				<li class="expertise <?php echo ($CURRENT_PAGE == 'expertise')?'current':'' ?>"><a href="<?php echo createPATH($CURRENT_LEVEL) ?>expertise.php" title="<?php echo $KEY[$LANGUAGE]['EXPERTISE'] ?>"><span><?php echo $KEY[$LANGUAGE]['EXPERTISE'] ?></span></a></li>
				<li class="network <?php echo ($CURRENT_PAGE == 'network')?'current':'' ?>"><a href="<?php echo createPATH($CURRENT_LEVEL) ?>network.php" title="<?php echo $KEY[$LANGUAGE]['NETWORK'] ?>"><span><?php echo $KEY[$LANGUAGE]['NETWORK'] ?></span></a></li>
				<li class="info <?php echo ($CURRENT_PAGE == 'info')?'current':'' ?>"><a href="<?php echo createPATH($CURRENT_LEVEL) ?>info.php" title="<?php echo $KEY[$LANGUAGE]['INFO'] ?>"><span><?php echo $KEY[$LANGUAGE]['INFO'] ?></span></a></li>
				<li class="workwithus <?php echo ($CURRENT_PAGE == 'workwithus')?'current':'' ?>"><a href="<?php echo createPATH($CURRENT_LEVEL) ?>workwithus.php" title="<?php echo $KEY[$LANGUAGE]['WORKWITHUS'] ?>"><span><?php echo $KEY[$LANGUAGE]['WORKWITHUS'] ?></span></a></li>
				<li class="contacts last <?php echo ($CURRENT_PAGE == 'contacts')?'current':'' ?>"><a href="<?php echo createPATH($CURRENT_LEVEL) ?>contacts.php" title="<?php echo $KEY[$LANGUAGE]['CONTACTS'] ?>"><span><?php echo $KEY[$LANGUAGE]['CONTACTS'] ?></span></a></li>
			</ul>
		</nav>
		<a class="logo" href="<?php echo createPATH($CURRENT_LEVEL) ?>home.php">Logo</a>
		<div class="main-banner"></div>
	</div>
</header>