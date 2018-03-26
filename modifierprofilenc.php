<?php
session_start();
$servername = "localhost";
$username = "username";
$dbname = "pfe";
$id=$_GET['id'];


// Create connection
$conn = new mysqli("localhost", "root" , "", "pfe");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$stmt = $conn->prepare("UPDATE personne SET nom = ?, prenom = ?,dat = ?, mdp = ?,cne = ? where id_pers=? " );
$stmt->bind_param("ssssss",$_POST['nom'],$_POST['prenom'],$_POST['dat'],$_POST['mdp'],$_POST['cne'],$_GET['id']);

$stmt->execute();

if ($stmt->execute()=== TRUE) {
  echo '<script type="text/javascript">'
 . 'alert("Record updated successfully ");'
 . '</script>';
    //echo "Votre information est bien modifier";
    include("profilencad.php");
} else {
    //echo "Error " . $conn->error;
echo '<script type="text/javascript">'
 . 'alert("Error updating record: ");'
 . '</script>';
    include("profilencad.php");
}

mysql_close($conn);
?>


