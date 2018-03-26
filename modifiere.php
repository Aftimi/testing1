<?php
session_start();
$servername = "localhost";
$username = "username";
$dbname = "pfe";
// Create connection
$conn = new mysqli("localhost", "root" , "", "pfe");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//$sql = "UPDATE stage SET DOMAINE=$dom and SUJET=$sujet and DATE_DEBUT=$dated and DATE_FIN=$datef ";
//$sttm = $conn->prepare("UPDATE stage SET (DOMAINE, SUJET , DATE_DEBUT, DATE_FIN )  values (?,?,?,?)");
//$sttm->bind_param("ssss",$dom, $sujet, $dated, $datef);
$stmt = $conn->prepare("UPDATE equipe SET discipline = ?, chef_equipe = ?, EMAIL_chef= ? where id_equi=?  " );
$stmt->bind_param("ssss",$_POST['discipline'], $_POST['chef_equipe'], $_POST['EMAIL_chef'],$_GET['id']);





if ($stmt->execute()=== TRUE) {
  echo '<script type="text/javascript">'
 . 'alert("Record updated successfully ");'
 . '</script>';
    //echo "Record updated successfully";
    include("equipe.php");
}
 else {
    //echo "Error updating record: " . $conn->error;
echo '<script type="text/javascript">'
 . 'alert("Error updating record: ");'
 . '</script>';
    include("equipe.php");
}
?>