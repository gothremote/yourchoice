<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title> <?php echo $titre; ?> </title>
        <link rel="icon" type="image/png" href="/yourchoice/images/favicon.png" />
	<link rel="stylesheet" type="text/css" href="/yourchoice/style/yourchoice.css">
	<?php echo $additional_headers; ?>
</head>
<body>
<div id="superglobale">
<div id="globale">
	<div class="header">
               <!-- <h1> Yourchoice </h1> -->
        <ul>
                <li><a <?php ec('index'); ?> class="accueil" href="/yourchoice" > Accueil </a></li><!--
		--><li><a <?php ec('Question'); ?> href="/yourchoice/Question" > Poses-ta question </a></li><!--
		--><li><a <?php ec('Improbable'); ?> href="/yourchoice/Improbable" >Questions improbables </a></li><!--
		--><li><a <?php ec('Sexe'); ?> href="/yourchoice/Sexe" >Questions sexuelles</a></li>
	</ul>
        </div>
        <?php if ($page !== 'index') echo '<div class="corp">';?>
