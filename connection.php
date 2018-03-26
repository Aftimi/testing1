<?php

$succes = 0;
$fail = 0;
$pas = 0;

$maConnexion=mysql_connect("localhost","root","");
if($maConnexion==FALSE)
{
    die("Erreur de connexion");
}
$ConnectBase=mysql_select_db("pfe");
if($ConnectBase==FALSE)
{
    die("Echec de connexion");
}

if(isset($_POST['submit'])){
	
	
    $email = htmlentities(trim($_POST['email']));
    $mdp = htmlentities(trim($_POST['mdp']));
    $select = mysql_query("SELECT * FROM personne");
    while($donnees = mysql_fetch_array($select)){
        if($email == $donnees['email'] && $mdp == $donnees['mdp']){
            $id_pers = $donnees['id_pers'];
            $nom = $donnees['nom'];
			$prenom = $donnees['prenom'];
            $email = $donnees['email'];
			$dat = $donnees['dat'];
			$cne = $donnees['cne'];
            $domaine = $donnees['domaine'];
			$genre_util = $donnees['genre_util'];
			$block = $donnees['block'];
            $id_equi = $donnees['id_equi'];
            $succes = 1;
            break;
	}
}
if($donnees['block']=='0'){  echo '<script type="text/javascript">'
 . 'alert(" Interdit!!!! ");'
 . '</script>';
    include("login.php");}
    
    if($succes == 1){
        session_start();
        $_SESSION['id_pres'] = $id_pers;
        $_SESSION['nom'] = $nom;
		$_SESSION['prenom'] = $prenom;
        $_SESSION['email'] = $email;
        $_SESSION['domaine'] = $domaine;
        		$_SESSION['dat'] = $dat;
		$_SESSION['cne'] = $cne;
		$_SESSION['genre_util'] = $genre_util;
		$_SESSION['block'] = $block;
        $_SESSION['id_equi'] = $id_equi;
      if($genre_util=='doctorant'){include("profil.php");}

      if($genre_util=='admin'){include("utilisateurs.php");}
      if($genre_util=='encadrant'){include("utilisateursencad.php");}
      else{}
    }
    else{
        $fail = 1;
		echo '<script type="text/javascript">'
 . 'alert("Erreur : email ou mot de passe incorrectes ");'
 . '</script>';
    //echo "<center> <h1>email ou mot de passe incorrectes</h1></center>";
        include("login.php");
	} 
}
?>