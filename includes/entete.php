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
                <li><a <?php if ($page === 'index') echo 'id="current"';?> class="accueil" href="/yourchoice" > Acceuil </a></li><!--
		--><li><a <?php if ($page === 'Question') echo 'id="current"';?> href="/yourchoice/Question" > Poses-ta question </a></li><!--
		--><li><a <?php if ($page === 'Improbable') echo 'id="current"';?> href="/yourchoice/Improbable" >Questions improbables </a></li><!--
		--><li><a <?php if ($page === 'Sexe') echo 'id="current"';?> href="/yourchoice/Sexe" >Questions sexuelles</a></li>
	</ul>
        </div>
        <?php if ($page !== 'index') echo '<div class="corp">';?>
