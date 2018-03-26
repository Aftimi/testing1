<?php
session_start();

$servername = "localhost";
$username = "username";

$dbname = "pfe";
$discipline=$_POST["discipline"];
$chef_equipe=$_POST["chef_equipe"];

$EMAIL_chef=$_POST["EMAIL_chef"];

// Create connection
$conn = new mysqli("localhost", "root" , "", "pfe");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "INSERT INTO stagiare (nom, prenom, cin, NAISSANCE, Niveau, filliere, email_stagiare , mdp_stagiaire) values
//('".$nom."', '".$prenom."','".$cin."','".$DATE."','".$Niveau."','".$filliere."','".$email."','".$mdp."')";
$sttm = $conn->prepare("INSERT INTO equipe (discipline,chef_equipe,EMAIL_chef) values (?,?,?)");
$sttm->bind_param("sss",$discipline, $chef_equipe, $EMAIL_chef);




if ($sttm->execute()=== TRUE) {
	echo '<script type="text/javascript">'
 . 'alert("Vous avez bien ajouter cet equipe . ");'
 . '</script>';
   // echo "<center> <h1>Vous avez inscrit . </h1>";
    include("equipe.php");
     
} else {

	echo '<script type="text/javascript">'
 . 'alert("Erreur ");'
 . '</script>';
   // echo "Error: " . $sql . "<br>" . $conn->error;
   include("equipe.php");
}


?>