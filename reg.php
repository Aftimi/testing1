



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
<body>

<center><form name="form1" action="" method="post" enctype="multipart/form-data">
    Upload file:
    <input type="file" name="f" id="f"/>
    name:<input type="text" name="t"/>
    <input type="submit" value="Upload" name="submit1">
    </form></center>
   
</body>  
<?php


if(isset($_POST["submit1"])){
	$filename=$_POST['t'];
$fnm = $_FILES["f"]["name"];
$dst = "./images/".$fnm;
move_uploaded_file($_FILES["f"]["tmp_name"],$dst);

$query ="insert into demo (filename,name,path,id_pers,id_equi) value('$filename','$fnm','$dst','$id_pers' ,'$id_equi')";
$ros =mysql_query($query);
if ($ros == true) {
   
    
}
}



?>
</html>