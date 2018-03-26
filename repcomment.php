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


$servername = "localhost";
$username = "username";
$dbname = "pfe";
$id=$_GET['id'];
$idp=$_GET['idp'];

// Create connection
$conn = new mysqli("localhost", "root" , "", "pfe");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$newcom=$_POST["newcom"];
$sttm = $conn->prepare("INSERT INTO repcommentaire (contenu,id_com,id_pub,id_pers,id_equi) values (?,?,?,?,?)");
$sttm->bind_param("sssss", $newcom, $id, $idp, $id_pers,$id_equi);


if ($sttm->execute()=== TRUE) {
	echo '<script type="text/javascript">'
 . 'alert("Vous avez commenter  . ");'
 . '</script>';

   // echo "<center> <h1>Vous avez inscrit . </h1>";
    include("news.php");
     
} else {

	echo '<script type="text/javascript">'
 . 'alert("Erreur ");'
 . '</script>';
   // echo "Error: " . $sql . "<br>" . $conn->error;
   include("news.php");
}


?>