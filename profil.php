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
</style>
</head>
<body><p>
<?php include "entete2.php"; ?></p>
<center>	
<?php
     echo "<table width='40%'  style='border: 4px solid blue  ;'>";echo "<tr >";echo "<td height='20%' width='15%'>";echo"<center>";
	 echo "<h2 color='black'>"; echo"NOM    :    ".$_SESSION['nom']  ;echo"</center>";echo "</td>";echo "</tr>";
	 echo"</br>";
			echo "<tr>";echo "<td height='20%' width='15%'>";echo "<h2 color='black'>";echo"<center>";echo"PRENOM    :     ".$_SESSION['prenom'];echo"</h2>";echo"</center>";echo "</td>";echo "</tr>";
			echo"</br>";
			echo "<tr>";echo "<td height='20%' width='15%'>";echo "<h2 color='black'>";echo"<center>";echo"DATE DE NAISSANCE     :      ".$_SESSION['dat'];echo"</h2>";echo"</center>";echo "</td>";echo "</tr>";
			echo"</br>";
			echo "<tr>";echo "<td height='20%' width='15%'>";echo "<h2 color='black'>";echo"<center>";echo"C.N.E    :     ".$_SESSION['cne'];echo"</h2>";echo"</center>";echo "</td>";echo "</tr>";
			echo"</br>";
 echo "<tr>";echo "<td height='20%' width='15%'>"; echo "<h2 color='black'>";echo"<center>";echo"email    :     ".$_SESSION['email'];echo"</h2>";echo"</center>";echo "</td>";echo "</tr>";
  echo"</br>";
   echo "<tr>";echo "<td height='20%' width='15%'>";echo "<h2 color='black'>";echo"<center>";echo"Domaine de recherche    :     ".$_SESSION['domaine'];echo"</center>";echo"</h2>";echo "</td>";echo "</tr>";
  echo"</br>";
  echo "</table>";
  $id_pers = $_SESSION['id_pres'];

 echo"<h3>";
echo"<a href='md.php?id=$id_pers'>";echo"modifier votre  profil";echo"</a>"; echo"</h3>";

  ?>
               




</center>
</form>
</TABLE>
<?php include "footer.php"; ?> 
</body>
</html>	


