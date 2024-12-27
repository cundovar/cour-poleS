<?php
//La superglobale $_POST est un array !
print '<pre>';	
	print_r( $_POST );
print '</pre>';

//$_POST['name'] où le 'name' correspond à l'attribut name='' des <input>, permet de récupérer la saisie de l'utilisateur.

if( $_POST ){ //SI il y a un "post" (donc une validation d'un formulaire via le bouton 'submit')

	echo "Prénom posté : " . $_POST['prenom'] . '<br>';

	echo "Description postée : $_POST[description] <hr>";
}

//-----------------------------------------------------------------------------
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Formulaire 1</title>
</head>
<body>

	<form method="post" action="" enctype="multipart/form-data">
		
		<!-- Les attributs de la balise <form>
				
				method="" : comment vont circuler les données (get ou post)
				action="" : représente l'URL de destination
				enctype="multipart/form-data" :  INDISPENSABLE pour pouvoir uploader des fichiers
		 -->

		<label>Prenom</label><br>
		<input type="text" name="prenom"><br><br>

		<!-- NE SURTOUT PAS OUBLIER L'ATTRIBUT name='' DANS LES INPUTS D'UN FORMULAIRE 
			Cet attribut permet de récupérer les valeurs via la superglobale $_POST (ou $_GET)
		-->

		<label for="desc">Description</label><br>
		<textarea name="description" id="desc" ></textarea><br><br>

		<input type="submit" name="valider" value="Envoyer">
	</form>

</body>
</html>