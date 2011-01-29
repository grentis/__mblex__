<head>
	<title><?php echo ($CURRENT_LEVEL == 1)?''.$KEY[$LANGUAGE][strtoupper($CURRENT_PAGE)]:''.$KEY[$LANGUAGE][strtoupper($CURRENT_SUBPAGE)] ?> | Studio Legale Bicecci & Partners</title>
	<meta name="description" content="<?php echo $KEY[$LANGUAGE]['DESCRIPTION_TAG'] ?>" />
	<meta name="keywords" content="<?php echo $KEY[$LANGUAGE]['KEYWORD_TAG'] ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<?php if(strtoupper($CURRENT_PAGE) == 'EXPERTISE' && $CURRENT_LEVEL == 1) { ?>
		<meta http-equiv="refresh" content="0;url=expertise/dirbanfin.php" />
	<?php } ?>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css">
	<link rel="stylesheet" href="../<?php echo createPATH($CURRENT_LEVEL) ?>resources/style.css" type="text/css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<?php if(strtoupper($CURRENT_PAGE) == 'CONTACTS') { ?>
		<script type="text/javascript" src="../<?php echo createPATH($CURRENT_LEVEL) ?>resources/jquery.validate.pack.js"></script>
		<script type="text/javascript" src="../<?php echo createPATH($CURRENT_LEVEL) ?>resources/loc/messages_it.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<?php } ?>
	<script type="text/javascript" src="../<?php echo createPATH($CURRENT_LEVEL) ?>resources/site.js"></script>
</head>