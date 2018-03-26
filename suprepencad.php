<?php 
session_start();
function infos_membre_connecte(){
$infos=array();
$email=$_SESSION['email'];
$query=mysql_query("SELECT*FROM personne where email ='$email'");
while($row=mysql_fetch_assoc($query)){

$infos[]=$row;

}
return $infos;
}

$conn = mysql_connect("localhost", "root", "");
mysql_select_db("pfe");

$infos = infos_membre_connecte() ;
foreach($infos as $info){

  $id_equi=$info['id_equi'];
 $id_pers=$info['id_pers'];
 echo"</h3>";
}
session_start();
;
// Create connection
$conn = new mysqli("localhost", "root" , "", "pfe");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$conn = mysql_connect("localhost", "root", "");
mysql_select_db("pfe");


$id=$_GET['id'];
$idp=$_GET['idp'];
$idr=$_GET['idr'];
$stmt = $conn->prepare("DELETE FROM repcommentaire WHERE id_pub = ? and id_com = ? and id_new = ?  and id_equi = ?");
$stmt->bind_param("ssss",$idp,$id,$idr,$id_equi);

$stmt->execute();
if ($stmt->execute()=== TRUE  ) {
     echo '<script type="text/javascript">'
 . 'alert("vous avez supprimer ce repondre ");'
 . '</script>';
   // echo "Record deleted successfully";
     include("accencad.php");
} else {
	    echo '<script type="text/javascript">'
 . 'alert("Erreur");'
 . '</script>';
    //echo "Error deleting record: " . $conn->error;
     include("accencad.php");
    
}


?>