<?php

// Create connection
 mysql_connect('localhost', 'root' , "");
mysql_select_db("pfe");

$id = $_GET['id'];
$query = "select * from demo where id_file='$id'";
$query1 = mysql_query($query) ;
while($ros= mysql_fetch_array($query1)){
	
$path = $ros['path'];

header('content-Disposition: attachement; filename= '.$path.'');
header('content-type: application/octent-strem');
header('content-length=' .filesize($path));
readfile($path);
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Actualite</title>
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
</style>
</head>
<body></body></html>