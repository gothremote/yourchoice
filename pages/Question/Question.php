<?php 
entete('Poses ta question', $page);
?>
<form action="Question/choix" method="POST">
<center><label class="question" for="question">Question : </label><input type="text" class="question" id="question" name="question"></center>
</br>
<div id="tableau">
<table>
    <tr><td><label for="choix1">Choix 1 : </label><input type="text" id="choix1" name="choix1"> </td>
    <td><label for="choix2">Choix 2 : </label><input type="text" id="choix2" name="choix2"> </td> </tr>
    <tr><td><label for="choix3">Choix 3 : </label><input type="text" id="choix3" name="choix3"> </td>
    <td><label for="choix4">Choix 4 : </label><input type="text" id="choix4" name="choix4"> </td> </tr>
    <tr><td><label for="choix5">Choix 5 : </label><input type="text" id="choix5" name="choix5"> </td>
    <td><label for="choix6">Choix 6 : </label><input type="text" id="choix6" name="choix6"></td> </tr>
</table>
<input type="submit" value="décision" >
<input type="reset" value="effacer">
</div>
<?php 
basdepage($page);
?>
