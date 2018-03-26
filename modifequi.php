<html>
<head>
	<title>home</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

 
    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    input[type=text], select, textarea {
    width: 100%;
    padding: 30px;
    border: 20px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
    color :purple;
    margin-top: 12px;
    margin-bottom: 32px;
    resize: vertical;
}

   

input[type=submit]:hover {
    background-color: grey;
    color: blue;
}
.container1 {
    border-radius: 200px;

    padding: 25px;
}
</style>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: center;    
}
.container2{
    border-radius: 5px;
  
    padding: 5px;
}


</style>
</style>
</head>
<body><?php include "entetadmin.php"; ?></p>
<div class="jumbotron">
<?php

$servername = "localhost";
$username = "username";

$dbname = "pfe";
$id=$_GET['id'];
// Connection a la BDD
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("pfe");

$requete = "SELECT ID_EQUI,discipline,chef_equipe,EMAIL_chef FROM equipe";
$query_requete= mysql_query($requete) OR die('Requête invalide : ' . mysql_error());

$data = mysql_fetch_array($query_requete);

echo"<center><div class='container2'><table> <div class='container1'>";
echo"<form method='POST' action='modifiere.php?id=$id'><table><tr><td><label for='texte'>Theme d'équipe</label></td>
    <td><input type='texte' id='discipline' name='discipline' value='$data[1]'></BR></td></tr><tr><td>
      <label for='texte'>Chef Equipe</label></td><td>
    <input type='texte' id='chef_equipe' name='chef_equipe'value='$data[2]' ></BR></td></tr><tr><td>
     <label for='texte'>Email chef d' equipe</label></td><td>
    <input type='texte' id='EMAIL_chef' name='EMAIL_chef' value='$data[3]' ></BR></td></tr></table></div></br>
    <center><input type='submit' class='btn btn-info' value='Modifier'></center>
  </form>";echo"</div></center>";
mysql_close();
  ?>

</br></br>
  <?php include "footer.php"; ?> 
</div>
</body>
</html>