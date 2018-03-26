

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
<?php include "entete2.php"; ?> </p>
<table>
 <td><div class="img"><img src="images/img1.jpg" width="198" height="208" alt="" class="fl" /></div> </td>
<td></td> <td></td> <td></td><td></td><td></td>
	<td><h3 style="color:blue;">
<?php



function infos_membre_connecte(){
$infos=array();
$email=$_SESSION['email'];
$query=mysql_query("SELECT*FROM personne where email ='$email'");
while($row=mysql_fetch_assoc($query)){

$infos[]=$row;

}
return $infos;
}




$conn = mysql_connect("localhost", "root", "");
mysql_select_db("pfe");

$infos = infos_membre_connecte() ;
foreach($infos as $info){
	echo"</br>";
	 echo"NOM    :    ".$info['nom']  ;echo"</br>";echo"</br>";
			echo"PRENOM    :     ".$info['prenom'];echo"</br>";echo"</br>";
			echo"DATE DE NAISSANCE     :      ".$info['dat'];echo"</br>";echo"</br>";
			echo"VILLE    :     ".$info['adr'];echo"</br>";echo"</br>";
  echo"email    :     ".$info['email'];echo"</br>";echo"</br>";

	 
}

  ?>
</h3>

</td>
		
</table>

<br><br>








<?php include "footer.php"; ?> 

</body>
</html>	


