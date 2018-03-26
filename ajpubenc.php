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

<?php
// Create connection
$conn = new mysqli("localhost", "root" , "", "pfe");
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$objet=$_POST["publication"];



  
//$sql = "INSERT INTO stagiare (nom, prenom, cin, NAISSANCE, Niveau, filliere, email_stagiare , mdp_stagiaire) values
//('".$nom."', '".$prenom."','".$cin."','".$DATE."','".$Niveau."','".$filliere."','".$email."','".$mdp."')";
$sttm = $conn->prepare("INSERT INTO publication (objet,id_per,id_equi) values (?,?,?)");
$sttm->bind_param("sss",$objet,$id_pers,$id_equi);

if ($sttm->execute()=== TRUE) {
	echo '<script type="text/javascript">'
 . 'alert("Vous avez publier  . ");'
 . '</script>';

   // echo "<center> <h1>Vous avez inscrit . </h1>";
 include("accencad.php");
     
} else {

	echo '<script type="text/javascript">'
 . 'alert("Erreur ");'
 . '</script>';
   // echo "Error: " . $sql . "<br>" . $conn->error;
   include("accencad.php");
}


?>



