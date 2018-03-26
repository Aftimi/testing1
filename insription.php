<?php
session_start();

$servername = "localhost";
$username = "username";

$dbname = "pfe";

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];

$date=$_POST["date"];
$cne=$_POST["cne"];
$email=$_POST["email"];
$mdp=$_POST["mdp"];
$domaine=$_POST["domaine"];
// Create connection
$conn = new mysqli("localhost", "root" , "", "pfe");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "INSERT INTO stagiare (nom, prenom, cin, NAISSANCE, Niveau, filliere, email_stagiare , mdp_stagiaire) values
//('".$nom."', '".$prenom."','".$cin."','".$DATE."','".$Niveau."','".$filliere."','".$email."','".$mdp."')";
$sttm = $conn->prepare("INSERT INTO personne (nom, prenom, dat, cne, email , mdp ,domaine) values (?,?,?,?,?,?,?)");
$sttm->bind_param("sssssss",$nom, $prenom, $date, $cne, $email, $mdp, $domaine);

$query=("INSERT INTO doctorant (theme_recherche) value('a') ");


if ($sttm->execute()=== TRUE) {
	echo '<script type="text/javascript">'
 . 'alert("Vous etes bien inscrit connecter vous maintenant  . ");'
 . '</script>';

   // echo "<center> <h1>Vous avez inscrit . </h1>";
    include("login.php");
     
} else {

	echo '<script type="text/javascript">'
 . 'alert("Erreur ");'
 . '</script>';
   // echo "Error: " . $sql . "<br>" . $conn->error;
   include("signin.php");
}
?>