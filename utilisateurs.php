
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
<?php include "entetadmin.php"; ?></p>
<p>

  <?php




// Connection a la BDD
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("pfe");

$requete = "SELECT id_pers,nom, prenom, dat, cne, genre_util,email,block FROM personne where genre_util='doctorant' ";
$query_requete= mysql_query($requete) OR die('Requête invalide : ' . mysql_error());
    echo"<center>";echo"<div class='container2'>";
    echo"<H2 style='color=black'>"; echo"</br>";echo"LES DOCTORANTS";echo"</br>";
echo "<table><tr><td>NOM</td><td>Prenom</td><td>date de naissance</td><td>adresse</td> <td>email</td></tr>";
while($data = mysql_fetch_array($query_requete))
{
echo "<tr><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[6]</td><td><a href='suppdoct.php?id=$data[0]' class='btn btn-primary btn-lg' role='button'>Supprimer</a></td>";
    if($data[7]=='1'){echo '<td><a href=blockdoct.php?id=$data[0] class=btn btn-primary btn-lg role=button>bloquer</a></td>';  }
    else { echo '<td><a href=deblockdoct.php?id=$data[0] class=btn btn-primary btn-lg role=button>Débloquer</a></td></tr>';  }
   
}
echo "</table>";  echo"</div>"; echo"</center>";
echo"<center>";echo"<div class='container2'>";
   echo"<H2 style='color=black'>";echo"</br>";echo"LES Encadrants";echo"</br>";

$requete1 = "SELECT id_pers,nom, prenom, dat, cne, genre_util,email,block FROM personne where genre_util='encadrant' ";
$query_requete1= mysql_query($requete1) OR die('Requête invalide : ' . mysql_error());
    echo"<center>";echo"<div class='container2'>";
    echo"<H2 style='color=black'>";
echo "<table><tr><td>NOM</td><td>Prenom</td><td>date de naissance</td><td>adresse</td> <td>email</td></tr>";
while($dataa = mysql_fetch_array($query_requete1))
{
echo "<tr><td>$dataa[1]</td><td>$dataa[2]</td><td>$dataa[3]</td><td>$dataa[4]</td><td>$dataa[6]</td><td><a href='suppencadr.php?id=$dataa[0]' class='btn btn-primary btn-lg' role='button'>Supprimer</a></td>";
    if($dataa[7]=='1'){echo '<td><a href=blockencadr.php?id=$dataa[0] class=btn btn-primary btn-lg role=button>bloquer</a></td>';  }
    else { echo '<td><a href=deblockencadr.php?id=$dataa[0] class=btn btn-primary btn-lg role=button>Débloquer</a></td></tr>';  }
}
echo "</table>";  echo"</div>"; echo"</center>";















mysql_close();
?>

</p>














































<?php include "footer.php"; ?> 


</body>
</html>	
