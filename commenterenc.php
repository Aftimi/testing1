
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
$conn = new mysqli("localhost", "root" , "", "pfe");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$servername = "localhost";
$username = "username";

$dbname = "pfe";

$id=$_GET['id'];


// Create connection


$CONTENU=$_POST["CONTENU"];
$sttm = $conn->prepare("INSERT INTO commentaire (CONTENU,id_pub,id_pers,id_equi) values (?,?,?,?)");
$sttm->bind_param("ssss", $CONTENU, $id , $id_pers , $id_equi);


if ($sttm->execute()=== TRUE) {
	echo '<script type="text/javascript">'
 . 'alert("Vous avez commenter  . ");'
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