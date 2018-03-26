


 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PROFIL</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-georgia.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<style>
</style>
<style>
table, th, td {
  
}
th, td {
    padding: 30px;
    text-align: center;  

}
.container2{
    border-radius: 5px;
  background-color: #e9f0fd ;
    padding: 30px;
}
	input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    
    margin-bottom: 10px;
    resize: vertical;
}
input[type=submit] {
    background-color:  #253b67;
    color: white;
    padding: 6px 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color:  #253b67;
}
.container {
    border-radius: 5px;
    background-color: #e9f0fd ;
    padding: 1px;
}


</style>
</style>
</head>
<body>

<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("pfe");
$requete = "SELECT publication.id_pub,publication.objet,publication.date_pub,publication.id_per,personne.id_pers,personne.nom,personne.prenom FROM publication,personne where publication.id_per=personne.id_pers ";
$query_requete= mysql_query($requete) OR die('Requête invalide : ' . mysql_error());
    
   echo"</br>";echo"</br>";

while($data = mysql_fetch_array($query_requete))
{
	
echo "<H2 style='color=black'><div class='container2'><table width=100% border=4px solid=blue  ;><H2 style='color=black'><tr><td width=20%>$data[5]&nbsp;&nbsp;&nbsp;$data[6]</td><td>$data[1]</td></tr><tr><td width=80%></td><td>$data[2]</td></tr><tr><td width=80%><div class='container'><form method='POST' action='commenter.php?id=$data[0]'><input type='text' id='CONTENU' name='CONTENU' placeholder='votre commentaire ...'></td><td><input type='submit' class='btn btn-info' value='Commenter'></form></div></td></tr></table></div><center><center><center><a href='showdetails.php?id=$data[0]'>Voir Plus</a> </center></center><center></h2>";
}
mysql_close();
?>
 
</body></html>