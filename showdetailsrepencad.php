<?php 
    
   $maConnexion=mysql_connect("localhost","root","");
if($maConnexion==FALSE)
{
    die("Erreur de connexion");
}
$ConnectBase=mysql_select_db("pfe");
if($ConnectBase==FALSE)
{
    die("Echec de connexion");
}
   session_start();
   $id_pers = $_SESSION['id_pres'];
   $id_equi = $_SESSION['id_equi'];
     
 ?>

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
<?php include "entete2.php"; ?> </p>

<?php




$conn = mysql_connect("localhost", "root", "");
mysql_select_db("pfe");
$id=$_GET['id'];
$idp=$_GET['idp'];
$requete = "SELECT commentaire.id_pub,commentaire.id_com,commentaire.CONTENU,commentaire.DATE_com,commentaire.id_pers,commentaire.id_equi,publication.id_pub,personne.id_pers,personne.nom FROM publication,personne,commentaire where publication.id_pub=commentaire.id_pub  and commentaire.id_pers=personne.id_pers and commentaire.id_equi='$id_equi' and publication.id_pub='$idp' and commentaire.id_com='$id'";
$query_requete= mysql_query($requete) OR die('Requête invalide : ' . mysql_error());
    echo"<div class='container2'>";
   echo"</br>";echo"</br>";
   $data = mysql_fetch_array($query_requete);
   echo "<H2 style='color=black'><table><H2 style='color=black'><tr><td>$data[7]</td><td>$data[2]</td><td>$data[3]</td></tr><tr><td></td><td><center><center><form method='POST' action='repcomment.php?idp=$data[0]&id=$data[1]'><input type='text' id='newcom' name='newcom' placeholder='votre repondre...'></center></center></td><td><input type='submit' class='btn btn-info' value='repondre'></form></td></tr></table></h2>";
$requete1 = "SELECT commentaire.id_pub,commentaire.id_com,repcommentaire.id_new,repcommentaire.id_equi,repcommentaire.id_pub,repcommentaire.id_com,repcommentaire.id_pers,repcommentaire.contenu,repcommentaire.date_com,personne.id_pers,personne.nom FROM personne,commentaire,repcommentaire where commentaire.id_pub=repcommentaire.id_pub  and repcommentaire.id_pers=personne.id_pers and repcommentaire.id_pub='$idp' and repcommentaire.id_com='$id'";
$query_requete1= mysql_query($requete1) OR die('Requête invalide : ' . mysql_error());
    echo"<div class='container2'>";
    echo"<H2 style='color=black'>";echo"</br>";

while($dataa= mysql_fetch_array($query_requete1))
{  echo"<center>";
	
echo "<table><H2 style='color=black'><tr><td>$dataa[10]</td><td>$dataa[7]</td><td>$dataa[8]</td></tr><tr><td></td><td><center><a href='suprepadmin.php?idp=$data[0]&id=$dataa[1]&idr=$dataa[2]'>Supprimer le commentaire</a><center></td></tr></H2></table></center></br>";
echo"</center>";}
mysql_close();
?>

 
</body>
</html>