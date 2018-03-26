<?php
session_start();
;
// Create connection
$conn = new mysqli("localhost", "root" , "", "pfe");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id=$_GET['id'];
$idp=$_GET['idp'];

$stmt = $conn->prepare("DELETE FROM commentaire WHERE id_pub = ? and id_com = ?");
$stmt->bind_param("ss",$id,$idp);

$stmt->execute();
if ($stmt->execute()=== TRUE  ) {
     echo '<script type="text/javascript">'
 . 'alert("vous avez supprimer ce commentaire ");'
 . '</script>';
   // echo "Record deleted successfully";
     include("acc.php");
} else {
	    echo '<script type="text/javascript">'
 . 'alert("Erreur");'
 . '</script>';
    //echo "Error deleting record: " . $conn->error;
     include("acc.php");
    
}


?>