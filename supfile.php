<?php
session_start();
;
// Create connection
$conn = new mysqli("localhost", "root" , "", "pfe");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id = $_GET['id'];


$stmt = $conn->prepare("DELETE FROM demo WHERE id_file = ?");
$stmt->bind_param("s",$id);

$stmt->execute();
if ($stmt->execute()=== TRUE  ) {
     echo '<script type="text/javascript">'
 . 'alert("vous avez supprimer ce file ");'
 . '</script>';
   // echo "Record deleted successfully";
     include("teladmin.php");
} else {
	    echo '<script type="text/javascript">'
 . 'alert("Erreur");'
 . '</script>';
    //echo "Error deleting record: " . $conn->error;
     include("teladmin.php");
    
}


?>