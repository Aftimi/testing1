
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
<?php include "entetadmin.php"; ?> </p>
<?php include "reg.php"; ?> </p></br></br></br>



<?php


 mysql_connect('localhost', 'root' , "");
mysql_select_db("pfe");

$query = "select * from demo";
$query1 = mysql_query($query) ;
while($ros= mysql_fetch_array($query1)){
	
$path = $ros['path'];
$id = $ros['id_file'];$idp = $ros['id_pers'];$name = $ros['name'];$date = $ros['date_aj'];echo'<center>';
echo'<table width=70% border=4px solid=blue  ;>';echo'<tr>';

$queryp = "select * from personne where id_pers='$idp' ";
$queryp1 = mysql_query($queryp) ;
$data = mysql_fetch_array($queryp1);
$nom = $data['nom'];$prenom= $data['prenom'];echo'<H2 style=color=black>';
echo'<tr>';echo'<td width=75%>';echo'<H2>';echo $nom. '&nbsp;&nbsp;&nbsp;' ;echo $prenom; echo ' a ajouté &nbsp;&nbsp;&nbsp;'; echo $name ; echo' le &nbsp;&nbsp;&nbsp;';echo $date;echo'</H2 >';echo'</td>';echo'<td>';
echo'<img src="'.$path.'" width="110px" height="100px" />';echo'</td>';echo'<td>';echo'<center>';
echo'<a href="download.php?id= '.$id.'">';echo'download';echo'</a>';echo'</center>';echo'</td>';echo'<td>';echo'<center>';
echo'<a href="visualiser.php?id= '.$id.'">';echo'Visualiser';echo'</a>';echo'</center>';echo'</td>';echo'<td>';echo'<center>'; echo'<a href="supfile.php?id= '.$id.'">';echo'supprimer';echo'</a>';echo'</center>';echo'</td>';echo'</tr>';echo'</table>';echo'</center>';echo'</br>';
} ?>





</body>
</html>

