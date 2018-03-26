<?php
// On commence par récupérer les champs
 
 
if(isset($_POST['ID_GENRE_ARTICLE']))      $ID_GENRE_ARTICLE=$_POST['ID_GENRE_ARTICLE'];
else      $ID_GENRE_ARTICLE="";
 
if(isset($_POST['ID_DISPO_ARTICLE']))      $ID_DISPO_ARTICLE=$_POST['ID_DISPO_ARTICLE'];
else      $ID_DISPO_ARTICLE="";
 
if(isset($_POST['LIBELLE_ARTICLE']))      $LIBELLE_ARTICLE=$_POST['LIBELLE_ARTICLE'];
else      $LIBELLE_ARTICLE="";
 
if(isset($_POST['DESCRIPTION_ARTICLE    ']))      $DESCRIPTION_ARTICLE=$_POST['DESCRIPTION_ARTICLE'];
else      $DESCRIPTION_ARTICLE  ="";
 
if( isset($_POST['upload']) )                 
 
 
{
    $content_dir = 'C:\wamp\www\Insert\img\articles\'; // dossier où sera déplacé le fichier
    print_r($_FILES['fichier']);
 
    $tmp_file = $_FILES['fichier']['tmp_name'];
 
 
    if( !is_uploaded_file($tmp_file) )
    {
        exit("Le fichier est introuvable");
    }
 
    // on vérifie maintenant l'extension
     
    $type_file = $_FILES['fichier']['type'];
     
 
    if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') )
    {
        exit("Le fichier n'est pas une image");
    }
 
 
    // on copie le fichier dans le dossier de destination
    $name_file = $_FILES['fichier']['name'];
    $IMAGE_ARTICLE=$name_file;
 
     
     
 
    if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
    {
        exit("Impossible de copier le fichier dans $content_dir");
    }
 
    echo "Le fichier a bien été uploadé";
}
 
 
if(isset($_POST['AUTEUR_ARTICLE']))      $AUTEUR_ARTICLE=$_POST['AUTEUR_ARTICLE'];
else      $AUTEUR_ARTICLE="";
 
if(isset($_POST['EDITEUR_ARTICLE']))      $EDITEUR_ARTICLE=$_POST['EDITEUR_ARTICLE'];
else      $EDITEUR_ARTICLE="";
 
if(isset($_POST['DATE_EDITION_ARTICLE']))  $DATE_EDITION_ARTICLE=$_POST['DATE_EDITION_ARTICLE'];
else      $DATE_EDITION_ARTICLE="";
 
if(isset($_POST['SEUIL_ARTICLE']))      $SEUIL_ARTICLE=$_POST['SEUIL_ARTICLE'];
else      $SEUIL_ARTICLE="";
 
if(isset($_POST['STOCK_ARTICLE']))      $STOCK_ARTICLE=$_POST['SEUIL_ARTICLE'];
else      $STOCK_ARTICLE="";
 
if(isset($_POST['PRIX_HT_ARTICLE']))      $PRIX_HT_ARTICLE=$_POST['SEUIL_ARTICLE'];
else      $PRIX_HT_ARTICLE="";
 
if(isset($_POST['REDUCTION_ARTICLE']))      $REDUCTION_ARTICLE=$_POST['SEUIL_ARTICLE'];
else      $REDUCTION_ARTICLE="";
 
 
// connexion à la base
$db = mysql_connect('localhost', 'root', "")  or die('Erreur de connexion '.mysql_error());
// sélection de la base 
 
    mysql_select_db('copie bdd',$db)  or die('Erreur de selection '.mysql_error());
      
    // on écrit la requête sql
    $sql = "INSERT INTO article (ID_GENRE_ARTICLE, ID_DISPO_ARTICLE,LIBELLE_ARTICLE,DESCRIPTION_ARTICLE,IMAGE_ARTICLE,AUTEUR_ARTICLE,EDITEUR_ARTICLE,DATE_EDITION_ARTICLE,SEUIL_ARTICLE,STOCK_ARTICLE,PRIX_HT_ARTICLE,REDUCTION_ARTICLE)
VALUES ('$ID_GENRE_ARTICLE','$ID_DISPO_ARTICLE',' $LIBELLE_ARTICLE','$DESCRIPTION_ARTICLE','$IMAGE_ARTICLE','$AUTEUR_ARTICLE','$EDITEUR_ARTICLE','$DATE_EDITION_ARTICLE','$SEUIL_ARTICLE', '$STOCK_ARTICLE','$PRIX_HT_ARTICLE','$REDUCTION_ARTICLE')";
      
    // on insère les informations du formulaire dans la table
    mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
 
    // on affiche le résultat pour le visiteur
    echo 'Vos infos on été ajoutées.';
 
    mysql_close();  // on ferme la connexion
    
?>