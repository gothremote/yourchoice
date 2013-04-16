<?php 
entete('Question Hot', $page);
?>

Choisis ton type de questions : <br> <br>

<form action="Sexe/Qsex2" method="POST">


<input type="radio" name="choix" value="choix1">
<label for="choix1">Choix de positions sexuelles </label> <br><br>

<input type="radio" name="choix" value="choix2">
<label for="choix2">Choix d'un lieu pour une relation sexuelle </label><br><br>

<input type="radio" name="choix" value="choix3">
<label for="choix3">Choix d'insultes pendant une relation sexuelle </label><br><br>

<input type="radio" name="choix" value="choix4">
<label for="choix4">Choix d'activités pour les priliminaires </label><br><br>


<input type="submit" value="choix" >

<?php 
basdepage($page);
?>

