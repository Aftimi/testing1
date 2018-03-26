<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Actualite</title>
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
<style>


</style>
</style>
</head>
<body><p>
<?php include "entetadmin.php"; ?> </p>

<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("pfe");
$id=$_GET['id'];
$requete = "SELECT publication.id_pub,publication.objet,publication.date_pub,publication.id_per,personne.id_pers,personne.nom FROM publication,personne where publication.id_per=personne.id_pers ";
$query_requete= mysql_query($requete) OR die('Requête invalide : ' . mysql_error());
    echo"<div class='container2'>";
   echo"</br>";echo"</br>";
   $data = mysql_fetch_array($query_requete);
   echo "<H2 style='color=black'><table><H2 style='color=black'><tr><td>$data[5]</td><td>$data[1]</td><td>$data[2]</td></tr><tr><td></td><td><center><center><form method='POST' action='commenterad.php?id=$data[0]'><input type='text' id='CONTENU' name='CONTENU' placeholder='votre commentaire ...'></center></center></td><td><input type='submit' class='btn btn-info' value='Commenter'></form></td></tr></table></h2>";
$requete = "SELECT commentaire.id_pub,commentaire.id_com,commentaire.CONTENU,commentaire.DATE_com,commentaire.id_pers,publication.id_pub,personne.id_pers,personne.nom FROM publication,personne,commentaire where publication.id_pub=commentaire.id_pub  and commentaire.id_pers=personne.id_pers ";
$query_requete= mysql_query($requete) OR die('Requête invalide : ' . mysql_error());
    echo"<div class='container2'>";
    echo"<H2 style='color=black'>";echo"</br>";

while($dataa= mysql_fetch_array($query_requete))
{  echo"<center>";
	
echo "<table><H2 style='color=black'><tr><td>$dataa[7]</td><td>$dataa[2]</td><td>$dataa[3]</td></tr><tr><td></td><td><center><center><form method='POST' action='repcommentad.php?idp=$dataa[0]&id=$dataa[1]'><input type='text' id='newcom' name='newcom' placeholder='votre repondre...'></center></center></td><td><input type='submit' class='btn btn-info' value='repondre'></form></td></tr></H2></table><a href='showdetailsrepadmin.php?idp=$data[0]&id=$dataa[1]'>Voir Plus</a></br><a href='supcomadmin.php?idp=$data[0]&id=$dataa[1]'>Supprimer commentaire</a></br>";
echo"</center>";}
mysql_close();
?>

<?php include "footer.php"; ?> 
</body>
</html>
