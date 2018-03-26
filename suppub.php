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

$stmt = $conn->prepare("DELETE FROM publication WHERE id_pub = ?");
$stmt->bind_param("s",$id);

$stmt->execute();
if ($stmt->execute()=== TRUE  ) {
     echo '<script type="text/javascript">'
 . 'alert("vous avez supprimer cette publication ");'
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