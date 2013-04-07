<?php 
entete('Pose ta question');
?>
<form action="choix.php" method="POST">
<label for="question">Question : </label><input type="text" id="question" name="question"><br><br>

<label for="choix1">Choix 1 : </label><input type="text" id="choix1" name="choix1"> <br><br>
<label for="choix2">Choix 2 : </label><input type="text" id="choix2" name="choix2"><br><br>
<label for="choix3">Choix 3 : </label><input type="text" id="choix3" name="choix3"><br><br>
<label for="choix4">Choix 4 : </label><input type="text" id="choix4" name="choix4"><br><br>
<label for="choix5">Choix 5 : </label><input type="text" id="choix5" name="choix5"><br><br>
<label for="choix6">Choix 6 : </label><input type="text" id="choix6" name="choix6"><br><br>

<input type="submit" value="décision" >
<?php 
basdepage();
?>
