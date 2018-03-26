<?php
$servername = "localhost";
$username = "username";

$dbname = "pfe";

// Create connection
$conn = new mysqli("localhost", "root" , "", "pfe");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id=$_GET['id'];

$sql = ("UPDATE personne SET block='1' WHERE id_pers = $id ");

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">'
 . 'alert("Utilisateur bien debloqer ");'
 . '</script>';  include("utilisateurs.php");
    
} else {
   echo '<script type="text/javascript">'
 . 'alert("error ");'
 . '</script>'  
     . $conn->error;  include("utilisateurs.php");
    
}

$conn->close();
?>