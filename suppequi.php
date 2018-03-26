<?php
session_start();
;
// Create connection
$conn = new mysqli("localhost", "root" , "", "pfe");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$stmt = $conn->prepare("DELETE FROM equipe WHERE id_equi = ?");
$stmt->bind_param('i', $_GET['id']);

$stmt->execute();
if ($stmt->execute()=== TRUE  ) {
     echo '<script type="text/javascript">'
 . 'alert("vous avez supprimer l équipe ");'
 . '</script>';
   // echo "Record deleted successfully";
     include("equipe.php");
} else {
	    echo '<script type="text/javascript">'
 . 'alert("Erreur");'
 . '</script>';
    //echo "Error deleting record: " . $conn->error;
     include("equipe.php");
    
}


?>