

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
    border: 3px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 10px;
    text-align: center;    
}
.container2{
    border-radius: 10px;
  
    padding: 20px;
}


</style>
</style>
</head>
<body><p>
<?php include "entetencad.php"; ?></p>
<p>

  <?php


$conn = mysql_connect("localhost", "root", "");
mysql_select_db("pfe");



$requete = "SELECT id_pers,nom, prenom,id_equi ,dat, cne, genre_util,email,blockenc FROM personne where genre_util='doctorant' and id_equi='$id_equi' ";
$query_requete= mysql_query($requete) OR die('Requête invalide : ' . mysql_error());
    echo"<center>";echo"<div class='container2'>";
    echo"<H2 style='color=black'>"; echo"</br>";echo"LES DOCTORANTS";echo"</br>";
echo "<table><tr><td>NOM</td><td>Prenom</td><td>date de naissance</td><td>CNE</td> <td>email</td></tr>";
while($data = mysql_fetch_array($query_requete))
{
echo "<tr><td>$data[1]</td><td>$data[2]</td><td>$data[4]</td><td>$data[5]</td><td>$data[7]</td><td><a href='suppdoct.php?id=$data[0]' class='btn btn-primary btn-lg' role='button'>Retirer</a></td>";
}

echo "</table>";  echo"</div>"; echo"</center>";


mysql_close();
?>

</p>
<?php include "footer.php"; ?> 
</body>
</html> 
	