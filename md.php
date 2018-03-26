




 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PROFIL</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-georgia.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />


</head>
<body><p>
<?php include "entete2.php"; ?> </p>
<center>    
   <h1 style="color:black" ><i> Modifier votre informations</i></h1><br/><br/></center>

<?php

$servername = "localhost";
$username = "username";

$dbname = "pfe";
$id=$_GET['id'];
// Connection a la BDD
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("pfe");

$requete = "SELECT id_pers,nom,prenom,dat, cne, mdp FROM personne where id_pers='$id' ";
$query_requete= mysql_query($requete) OR die('Requête invalide : ' . mysql_error());

$data = mysql_fetch_array($query_requete);

//$id=$data[0];



echo"<p>";
echo"<center>"; 
    
   echo"<div class='container'>";

    echo"<table  width='80%'>";
	 echo"<form method='post' action='modifierprofil.php?id=$id' style='border: 5px solid blue;'>";echo"</br>";
     echo"<center>";
echo"<tr>";
    echo"<td>";
	 echo"<label for='nom'>";
	 echo"Nom";
	echo"</label>";echo"</td>";echo"<td>";
	echo"<input type='text' id='nom' name='nom' value='$data[1]'>";echo"</br>";echo"</td>";
echo"</tr>";echo"<tr>";
         echo"<td>";
	 	echo"<label for='prenom' >";
	 	echo"prenom";
	 	echo" </label>";echo"</td>";echo"<td>";
	echo"<input type='text' id='prenom' name='prenom' value='$data[2]'>";echo"</br>";echo"</td>";
echo"</tr>";echo"<tr>";echo"<td>";
     echo"<label for='date'>";
     echo"Date de naissance";
 echo"</label>";echo"</td>";echo"<td>";

    echo"<input type='date' id='dat' name='dat' value='$data[3]'>";echo"</br>";echo"</td>";
     
echo"</tr>";echo"<tr>";echo"<td>";
     echo"<label for='nom'>";
     echo"adresse";
 echo"</label>";echo"</td>";echo"<td>";
echo"<input type='texte' id='cne' name='cne' value='$data[4]'>";echo"</br>";echo"</td>";
echo"</tr>";echo"<tr>";echo"<td>";
     echo"<label for='nom'>";echo"MOT de passe"; echo"</label>";echo"</td>";echo"<td>";
    echo"<input type='password' id='mdp' name='mdp' value='$data[5]'>";echo"</br>";
    echo"</td>";
    echo"</tr>";echo"<tr>";echo"<td>";echo"</td>";
    	echo"<center>";echo"<td>";echo"<input type='submit' class='btn btn-info' value='Modifier'>";echo"</center>";
       echo"</td>"; echo"</tr>";echo"</table>";echo"</center>";
    

  echo"</form>";echo"</div>";echo"</center>";

echo"</p>";

mysql_close();
  ?>


<p>

<?php include "footer.php"; ?> </p>


</body>
</html> 