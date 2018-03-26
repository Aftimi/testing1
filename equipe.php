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
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 20px;
    text-align: center;    
}
.container2{
    border-radius: 5px;
  
    padding: 20px;
}


</style>
<style>
    input[type=text], select, textarea {
    width: 60%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 10px;
    resize: vertical;
}

    input[type=email], select, textarea {
    width: 60%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 10px;
    resize: vertical;
}

    input[type=date], select, textarea {
    width: 60%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 10px;
    resize: vertical;
}
    input[type=password], select, textarea {
    width: 60%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 10px;
    resize: vertical;
}

input[type=submit] {
    background-color:  #253b67;
    color: white;
    padding: 6px 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color:  #253b67;
}
.container {
    border-radius: 5px;
    background-color: #e9f0fd ;
    padding: 1px;
}
</style>
</style>
</head>
<body><p>
<?php include "entetadmin.php"; ?></p>
<p><CENTER><H2>Ajouter nouveau equipe </H2> </CENTER>
    <div class='container2'>
 <table>
    
   <div class="container">
  <form method="post" action="Ajouterequipe.php" style="border: 2px solid blue ;"></br>
    <table  width="100%">
<center>
<tr >
    <td width="25%">
     <label for="nom"><h3 style="color:black" ><center>Theme d'equipe</h3></center></label></br></br>
</td>
<td > <input type="text" id="discipline" name="discipline" placeholder="THEME  ..."></br></br>
   
   </td>
</tr>
<tr>
    <td> <label for="prenom"><h3 style="color:black" ><center>Nom chef equipe</h3></center></label></br></br></td>
<td> <input type="text" id="chef_equipe" name="chef_equipe" placeholder="Chef ..."></br></br></td>

</tr>
<tr>
    <td> <label for="identification"><h3 style="color:black" ><center>Email chef Equipe</h3></center></label></br></br></td>
<td> <input type="email" id="EMAIL_chef" name="EMAIL_chef" placeholder="identification..."></br></br></td>
</tr>
          
          </center>

 </table>
   <center> <input type="submit" value="Ajouter"></center></br></br>
  </form>




<center>
     
      <H2> Supprimer & modifier equipe </H2> 
</center>



  <?php




// Connection a la BDD
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("pfe");

$requete = "SELECT id_equi,discipline,chef_equipe,EMAIL_chef  FROM equipe   ";
$query_requete= mysql_query($requete) OR die('Requête invalide : ' . mysql_error());
    echo"<center>";echo"<div class='container2'>";
    echo"<H3 style='color=black'>";echo"</br>";echo"</br>";
echo "<table><tr></tr>";
while($data = mysql_fetch_array($query_requete))
{
echo "<tr><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td><a href='suppequi.php?id=$data[0]' class='btn btn-primary btn-lg' role='button'>Supprimer</a></td><td><a href='modifequi.php?id=$data[0]' class='btn btn-primary btn-lg' role='button'>Modifier</a></td></tr>";
}

echo "</table>";  echo"</div>"; echo"</center>";echo"</H3>";echo"</div>";echo"</center>";

mysql_close();
?>

</p>



<?php include "footer.php"; ?> 


</body>
</html>	
