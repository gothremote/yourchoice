<?php
entete('Reponse');
?>
<?php

$repeat=0;
$question=addslashes($_POST['question']);
$choix1=$_POST['choix1'];
$choix2=$_POST['choix2'];
$choix3=$_POST['choix3'];
$choix4=$_POST['choix4'];
$choix5=$_POST['choix5'];
$choix6=$_POST['choix6'];
$i=1 ;
$nb_choix=0; 
$souchaine='?';
$link=mysql_connect("localhost","root","root") or die("impossible");
$query='use Dilemme'; 
$res=mysql_query($query);

//test sur le format de la question
if ($question=='' or !strstr($question,$souchaine))
{	echo 'Veuillez entrer une vraie question (avec un ?) <br> Couillon !' ;}
else 
{
	while ($i<7) //vérification : si il y a des champs vides entre 2 réponses
	{  
		$i++;
		$reponse ="choix".$i;
		if ($$reponse !== '') 
		{
			$nb_choix++ ;
		}
	};
	
	if ($nb_choix<=1) 
	{
		echo "vous n'avez pas rempli assez de réponses.";
	}
	else 
	{
	
//insertion dans la base de données
		$query = " SELECT * FROM Qinternaute ";
		$res=mysql_query($query);


//vérification : si la question a déjà été posée
		while ($row = mysql_fetch_array($res)) 
		{	
			$test=addslashes($row['question']);

		 	if ($test==$question and $row['reponse1']==$choix1 and $row['reponse2']==$choix2 and $row['reponse3']==$choix3 and $row['reponse4']==$choix4 and $row['reponse5']==$choix5 and $row['reponse6']==$choix6) 
			{	$reponsef=$row['reponseD'] ; 
				$repeat=1;
			} ; 
		};

//la question n'a jamais été posée
		if ($repeat==0) 
		{
			$hasard=rand(1,$nb_choix);
			//echo '<br>'.$hasard ;
			$reponse = "choix".$hasard;
			while ($$reponse=='') {$hasard++ ; $reponse = "choix".$hasard ;};
			echo "A la question : " ;
			echo stripcslashes($question) ;
			echo "<br> Notre réponse est :  ";
			$reponsef=$$reponse ;
			echo '<br>'.$reponsef;

			$query="INSERT INTO `Qinternaute` (question, reponse1, reponse2, reponse3, reponse4, reponse5, reponse6, reponseD) VALUES ( '$question', '$choix1', '$choix2', '$choix3', '$choix4', '$choix5', '$choix6', '$reponsef');";
			$res=mysql_query($query);

		}

//la question a déjà été posée
		if ($repeat==1)
		{	echo "A la question : " ;
			echo stripcslashes($question) ;
			echo "<br> Notre réponse est toujours :  ";
			echo $reponsef ; 
		
		} ;
	};
     };
     
mysql_close($link);
?>
<?php
basdepage();
?>
