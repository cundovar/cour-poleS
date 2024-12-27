<h1>PAGE 2</h1>
<a href="page1.php">retour sur la page 1</a>


<?php
// $_GET represente l'url il s'agit d'une superglobale et en majuscule sinon no fonctionne

print '<pre>';
print_r($_GET);
print ' </pre>';
if(!empty($_GET)){// si $get n'est pas vide c'est qu'il y a une info envoyé dns l'url



echo "parametre 1: ".$_GET['article'].'<br>';
echo "parametre 2: ".$_GET['couleur'].'<br>';

echo "parametre 3: $_GET[prix].<br>";

}






// ***************************

//	$_GET représente l'URL, il s'agit d'une superglobale, et il faudra obligatoirement l'écrire en MAJUSCULE sinon ca ne fonctionnera pas.

print '<pre>';
	print_r( $_GET );
print '</pre>';

if( isset($_GET['article'], $_GET['couleur'], $_GET['prix']) ){ //SI $_GET N'EST PAS VIDE, c'est qu'il y a une information envoyée dans l'URL

	echo "Paramètre 1 : " . $_GET['article'] . '<br>';
	echo "Paramètre 2 : " . $_GET['couleur'] . '<br>';

	echo "Paramètre 3 : $_GET[prix] <br>";
}

/*
Pour récupérer la valeur, il faut préciser la clé entre crochets avec la superglobale $_GET, car toutes les superglobales sont des arrays !!

Pour passer les informations dans l'URL, il faut commencer par mettre un point d'interrogation '?' et ensuite on précise une 'clé' suivi d'un égal '=' et la valeur correspondante.

Si on veut faire passer plusieurs informations dans l'URL, il suffit de les séparer par un '&' !

	page2.php?article=jean&couleur=vert&prix=123
<=>
	fichier.php?cle=valeur&cle1=valeur1&cle2=valeur2
*/
