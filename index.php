<html>
 
<center>
 
<p>Genre<input type="text" name="ID_GENRE_ARTICLE" size="20" value="" maxlength="70"> </p></br>
<p>Disponnibilite article<input type="text" name="ID_DISPO_ARTICLE" size="20" value="" maxlength="70"> </p></br>
<p>Libelle<input type="text" name="LIBELLE_ARTICLE" size="20" value="" maxlength="70"></p></br>
<p>Description<input type="text" name="DESCRIPTION_ARTICLE" size="20" value="" maxlength="70"></p></br>
 
 
 
<form method="post" enctype="multipart/form-data" action="add.php"> <!-- bien vérifier que c'est le bon fichier -->
<p>
<input type="file" name="fichier" >
<input type="submit" name="upload" value="Uploader">
</p>
</form>
 
<p>Auteur<input type="text" name="AUTEUR_ARTICLE" size="20" value="" maxlength="70"> </p></br>
<p>Editeur<input type="text" name="EDITEUR_ARTICLE" size="20" value="" maxlength="70"></p> </br>
<p>Date de parution<input type="text" name="DATE_EDITION_ARTICLE" size="20" value="" maxlength="70"</p></br>
<p>Seuil<input type="text" name="SEUIL_ARTICLE" size="20" value="" maxlength="70"></p> </br>
<p>Stock<input type="text" name="STOCK_ARTICLE" size="20" value="" maxlength="70"> </p></br>
<p>Prix HT<input type="text" name="PRIX_HT_ARTICLE" size="20" value="" maxlength="70"> </p></br>
<p>Reduction<input type="text" name="REDUCTION_ARTICLE" size="20" value="" maxlength="70"></p> </br>
<p><input type="submit" value="Envoyer" name="envoyer">
</center>
 
</html>