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
<style>
</style>
<style>
table, th, td {
  
}
th, td {
    padding: 30px;
    text-align: center;    
}
.container2{
    border-radius: 10px;
  
    padding: 50px;
}


</style>
</style>
</head>
<body>

<?php


$conn = mysql_connect("localhost", "root", "");
mysql_select_db("pfe");


$requete = "SELECT publication.id_pub,publication.objet,publication.date_pub,publication.id_per,publication.id_equi,personne.id_pers,personne.nom FROM publication,personne ";
$query_requete= mysql_query($requete) OR die('Requête invalide : ' . mysql_error());
    echo"<div class='container2'>";
   echo"</br>";echo"</br>";

while($data = mysql_fetch_array($query_requete))
{
	
echo "<H2 style='color=black'><table><H2 style='color=black'><tr><td>$data[6]</td><td>$data[1]</td><td>$data[2]</td></tr><tr><td></td><td><center><center><form method='POST' action='commenterenc.php?id=$data[0]'><input type='text' id='CONTENU' name='CONTENU' placeholder='votre commentaire ...'></center></center></td><td><input type='submit' class='btn btn-info' value='Commenter'></form></td></tr></table><a href='showdetailsencad.php?id=$data[0]'>Voir Plus</a></br><a href='supencad.php?id=$data[0]'>Supprimer publication</a></h2>";
}
mysql_close();
?>
 
</body></html>
