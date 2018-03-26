 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sign in</title>
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
	input[type=text], select, textarea {
    width: 60%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 10px;
    resize: vertical;
}

	input[type=email], select, textarea {
    width: 60%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 10px;
    resize: vertical;
}

	input[type=date], select, textarea {
    width: 60%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 10px;
    resize: vertical;
}
	input[type=password], select, textarea {
    width: 60%;
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
<body><p>
<?php include "entete.php"; ?> </p>
	<p><table style="width:100%">
  <tr>
    <td height="20%" width="15%">
 </td>
 	<td><center>	
   <h1 style="color:black" ><i>Inscrivez-vous </i></h1><br/><br/>
   <div class="container">
  <form method="post" action="insription.php" style="border: 2px solid blue ;"></br>
  	<table  width="100%">
<center>
<tr >
	<td width="25%">
	 <label for="nom"><h3 style="color:black" ><center>Nom</h3></center></label></br></br>
</td>
<td > <input type="text" id="nom" name="nom" placeholder="votre nom ..."></br></br>
   
   </td>
</tr>
<tr>
	<td> <label for="prenom"><h3 style="color:black" ><center>Prenom</h3></center></label></br></br></td>
<td> <input type="text" id="prenom" name="prenom" placeholder="votre prenom ..."></br></br></td>

</tr>
<tr>
	<td> <label for="identification"><h3 style="color:black" ><center>Email</h3></center></label></br></br></td>
<td> <input type="email" id="email" name="email" placeholder="identification..."></br></br></td>
</tr>
<tr>
	<td><label for="login"><h3 style="color:black" ><center>Mot de passe</h3></center></label></br></br></td>
<td> <input type="password" id="mdp" name="mdp" placeholder="login" /></br></br></td>
</tr>
<tr>
	<td>
		 <label for="ville"><h3 style="color:black" ><center>CNE</h3></center></label></br></br>
	</td>
	<td>   <input type="text" id="cne" name="cne" placeholder="votre C.N.E"></br></br></td>


</tr>
<tr>
    

<td><label for="ville"><h3 style="color:black" ><center>domaine de recherche</h3></center></label></br></br>
<td><select name="domaine" id="domaine"> 
<option value="Maroc" selected="selected">Informatique </option>
<option value="Afghanistan">Mécanique</option>
<option value="Afrique_Centrale">Electricité </option>
<option value="Afrique_du_sud">chimique </option> </br></br></td>



</tr>




<tr>   <td><label for="ville"><h3 style="color:black" ><center>Date de naissance</h3></center></label></br></br></td>
<td>  <input type="date" id="date" name="date" placeholder="date de naissance"></br></br></td>
</tr>

	
	
	  
	   
	      
	      </center>

 </table>
    <input type="submit" value="inscription"></br></br>
  </form>

  </center>
	

<br><br><br></p>
</h3></label></td></tr></h3></label></td></tr></h3></label></td></tr></h3></label></td></tr></h3></label></td></tr></h3></label></td></tr></center></table></form></div></center></td></tr></table></p>
  <div class="clr"></div>

    		
<?php include "footer.php"; ?> 

</body>
</html>	