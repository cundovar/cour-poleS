<!-- On peut écrire du HTML dans un fichier avec l'extension '.php' MAIS l'inverse N'EST PAS POSSIBLE -->

<style>
	h2{
		background: black;
		color: orange;
		text-align: center;
	}
	.rouge{
		color: tomato;
	}
</style>

<h2> Ecriture et affichage </h2>

<?php //balise ouvrante PHP

	// Ici, on ouvre un passage PHP pour y faire des traitements PHP
	/*
		Commentaires sur
		plusieurs lignes
	*/

	// CHAQUE INSTRUCTIONS DOIT SE TERMINER PAR UN POINT VIRGULE !!!

?> 
<!-- balise fermante PHP -->

<?php

	echo "Bonjour tout le monde";
	//echo est une instruction qui permet de faire un affichage

	echo '<p class="rouge"> Salut </p>';
	//On peut y inclure des balises HTML

	print "<strong> Coucou </strong>";
	// "print" est aussi une instruction pour effectuer une affichage (similaire a 'echo')
?>

<?php echo "<p> On est mardi </p>"; ?>

<?= "<p>quelque chose</p>";//Ici, le symbole "<?=" remplace le "<?php echo" ?>

<h3> <?= "Ici, on afficherai une variable"; ?> </h3>

<h2>Les variables : les types, déclaration et affectation</h2>

<?php
//Une variable : est espace nommé qui permet de conserver une ou plusieurs

//déclaration d'une variable avec le symbole '$' ! 
//Par convention, on ne doit pas nommer une variable en commencant par une chiffre ou un underscore ( '_' )

$a = 234;  //Ici, déclaration d'une variable nommée '$a' et on lui affecte la valeur de 234

echo $a . '<br>'; //ici, affiche de la variable $a

echo gettype( $a ) . '<br>'; //integer (entier)
//gettype() : fonciton prédéfinie de PHP qui permet de connaitre le type d'une variable (ici, 'integer').

$a = "Chaine de caractères"; //réaffectation de la valeur de la variable '$a'
echo gettype( $a ) . '<br>'; //string

$a = "54";
echo gettype( $a ) . '<br>'; //string, car le nombre est entre guillemets (ou quotes) et sera donc interprété comme une chaine de caractères

$a = 1.2;
echo gettype( $a ) . '<br>'; //double (nombre à virgule)

$a = false; //ou 'true'
echo gettype( $a ) . '<br>'; //boolean

//----------------------------------------------------------------------
echo "<h2> La concaténation </h2>";
//On concatène toujours avec le symbole 'point'
//La concaténation permet de rassemble des chaines de caractères et des variables ( ou des fonctions du langages PHP)

$hello = "Bonjour";
$everyone = 'tout le monde';

echo "<p>" . $hello . ' => ' . $everyone . '</p>';

//--------------------------------------------
//Les doubles quotes (guillemets) permettent d'interpréter les varaibles ALORS que les quotes simples (apostrophes) n'interpètent pas les variables et renverra une chaine.

echo ' $hello $everyone c\'est l\'heure <br> '; //Affiche : '$hello $everyone' => quotes simples

echo " $hello $everyone c'est l'heure <br> "; //Affiche : "Bonjour tout le monde" => quotes doubles

//----------------------------------------------------------------------
echo "<h2> La concaténation lors de l'affectation </h2>";

$prenom = 'Marco'; //declaration + affectation
echo $prenom . "<br>" ; // Marco

$prenom = 'Polo'; //Réaffectation (ecrase et remplace)
echo $prenom . '<br>'; // Polo

$pseudo = 'Anne';
echo $pseudo . '<br>'; //Anne

$pseudo .= '-Marie'; //Concaténation lors de l'affectation, ici, on affecte la valeur '-Marie' sur la variable $pseudo MAIS cela S'AJOUTE SANS remplacer la valeur la valeur précédente grâce à l'opérateur '.='
echo $pseudo . '<br>'; // Anne-Marie

//----------------------------------------------------------------------
echo "<h2> Les constantes et constantes magiques </h2>";
//Une constante : est un espace nommé qui permet de conserver une valeur SAUF QUE comme son nom l'indique, la valeur sera CONSTANTE !

define( 'CAPITALE', 'Paris' );
//Par convention : une constante se déclare toujours en MAJUSUCLE !

//define( arg1, arg2 );
	//arg1 : nom de la constante
	//arg2 : valeur de la constante

echo CAPITALE . '<br>'; //Paris

//---------------------------------------
//Constante magiques :

echo __LINE__ . '<br>'; //Affiche le numéro de la ligne (ici, 122)
echo __FILE__ . '<br>'; //chemin complet vers le fichier courant
echo __DIR__ . '<br>'; //chemin complet vers le dossier courant (01-cours)


//----------------------------------------------------------------------
echo "<h2> EXERCICE </h2>";
//Afficher : 'bleu-blanc-rouge' (avec les tirets) en mettant chaque couleur dans une variable

$a = 'bleu';
$b = 'blanc';
$c = 'rouge';

echo "$a - $b - $c <br>";
echo $a . '- ' . $b . '-' . $c . '<br>';

	$couleur = 'bleu';
	$couleur .= '-blanc';
	$couleur .= '-rouge';

	echo $couleur;

//----------------------------------------------------------------------
echo "<h2> Opérateurs arithmétiques </h2>";

$a = 10;
$b = 2;

echo $a + $b . '<br>'; //12
echo $a - $b . '<br>'; //8
echo $a * $b . '<br>'; //20
echo $a / $b . '<hr>'; //5

//Opération et affectation :

$a += $b; // equivaut : $a = $a + $b
echo $a .'<br>'; //12

$a -= $b; // equivaut : $a = $a - $b
echo $a . '<br>'; //10

$a *= $b; // equivaut : $a = $a * $b
echo $a . '<br>'; //20

$a /= $b; // equivaut : $a = $a / $b
echo $a . '<br>'; //10

//----------------------------------------------------------------------
echo "<h2> Structures conditionnelles (if/else) </h2>";

// isset() et empty() : 2 fonctions internes de pHP
	// isset() : "teste si ça existe" (si c'est défini)
	// empty() : "teste si c'cest vide" (0 ou non défini)

$vara = 0; 
$varb = '';

if( empty( $vara ) ) { //SI c'est vide, 0 ou non défini ALORS on exécute le code entre les accolades

	echo "La variable vara : 0 , vide ou non définie <br>";
}

if( isset( $varb ) ){ //SI la variable $varb existe ALORS on exécute le code entre les accolades

	echo "La variable varb : existe et est définie par rien <br>";
}

//-----------------------------------------------
// if / else
$a = 10;
$b = 5;
$c = 2;

if( $a > $b ){ //SI $a (10) est supérieur à $b (5) ALORS j'execute les instructions entre les accolades

	echo "A = $a est bien supérieur à B = $b <br>";
}
else{ //SINON (cas par défaut)

	echo "A n'est pas supérieur à B <br>";
}

//-----------------------------------------------
// => ET : && 

if( $a > $b && $b > $c ){ //SI $a (10) est supérieur à $b (5) - ET QUE - $b (5) est supérieur $c (2)

	echo "Ook pour les DEUX conditions ! <br>";
}

//-----------------------------------------------
// => OU : || (PC: altGr+6 | Mac: Option+Maj+L) 

if( $a == 8 || $b > $c  ){ //SI $a (10) est égal à 8 - OU QUE - $b (5) est supérieur $c (2)

	echo "Ook pour AU MOINS UNE des deux conditions ! <br>";
}

//-----------------------------------------------
// if / elseif / else
if( $a == 8 ){ //SI $a (10) est égale à 8

	echo "1 - A est égal à 8 <br>";
}
elseif( $a != 10 ){ //SINON SI $a (10) est différent de 10

	//le point d'exclamation '!' signifie "NOT", "différent de" => représente l'inverse de quelquechose

	echo "2 - A est différent de 10 <br>";
}
else{ //SINON... (cas par défaut)

	echo "3 - Tout est faux ! <br>";	
}

//-----------------------------------------------
//Forme contractée : condition ternaire

if( $a == 10 ){

	echo "A est égale à 10 <br>";
}
else{

	echo "A est différent de 10 <br>";
}

$a = 11;
//version ternaire : (La meme chose que la condition ci-dessus)
echo ( $a == 10 ) ? "A est égale à 10 <br>" : "A est différent de 10 <br>";

//Ici, le '?' remplace le 'if' et les ':' remplacent le 'else'

//-----------------------------------------------
//Comparaison :

$var1 = 1; //integer
echo '$var1 est de type ' . gettype( $var1 ) . '<br>';

$var2 = "1"; //string
echo '$var2 est de type ' . gettype( $var2 ) . '<br>';

if( $var1 == $var2 ){ //renvoie 'true'

	echo "L'égalite est vraie car la valeur est la même <br>";
}

//-----------------------
if( $var1 === $var2 ){ //renvoie 'true'

	echo "L'égalite est vraie <br>";
}
else{

	echo "L'égalite est fausse car la valeur est la même MAIS le type est différent<br>";
}

/*
Avec le triple égal '===', le test ne fonctionne pas car les types des variables sont différents. L'un est un entier (INTEGER) et l'autr est une chaine (STRING) donc ce n'est pas strictement égal

	'='		: affectation
	'=='	: comparaison en valeur
	'==='	: comparaison en valeur ET en type
*/

//----------------------------------------------------------------------
echo "<h2> Condition SWITCH </h2>";

$couleur = 'jaune';

switch( $couleur ){

	case 'bleu' : 
		echo "Vous aimez le bleu <br>";
	break;

	case 'vert':
		echo "Vous aimez le vert <br>";
	break;

	case 'rouge':
		echo "Vous aimez le rouge <br>";
	break;

	default : //Cas par défaut si on en rentre pas dans les cas précédents (à savoir que le break n'est pas nécessaire ici car nous sommes à la fin du scope da la condition switch)
		echo "Vous n'aimez pas la couleur jaune <br>";
}

echo "autre exercice 1 qui suit l'autre ci dessus <br/>";

//-------------------------------------------------
//EXERCICE : retranscrire la condition switch ci-dessus en condition if/else (ternaire pour les plus chauds)
if( $couleur == 'bleu' ){

	echo "Vous aimez le bleu <br>";
}
elseif( $couleur == 'vert' ){

	echo "Vous aimez le vert <br>";
}
elseif( $couleur == 'rouge'){

	echo "Vous aimez le rouge <br>";
}
else{
	echo "Vous n'aimez pas la couleur <br>";
}

//------------------------------------------------ 
echo "autre exercice 2 <br/>";
$couleur="bleu";
if( ($couleur == 'bleu') || ($couleur == 'vert') || ($couleur =='rouge') ){

	echo "Vous aimez la $couleur<br>";
}
else{

	echo "Vous n'aimez pas la couleur<br>";
}

//------------------------------------------------
//version ternaire :
echo ( ($couleur == 'bleu') || ($couleur == 'vert') || ($couleur =='rouge') ) ? "Vous aimez le $couleur<br>" : "Vous n'aimez pas la couleur<br>";

//------------------------------------------------
echo ( $couleur == 'bleu') ? "Vous aimez le bleu <br>" : 
		( ($couleur == 'vert') ? "Vous aimez le vert <br>" : 
			( ($couleur == 'rouge') ? "Vous aimez le rouge <br>" : "Vous n'aimez pas la couleur <br>" ) );

//----------------------------------------------------------------------
echo "<h2> Fonctions prédéfinies </h2>";

echo 'Date : ' . date("d/m/Y") . '<br>';

//--------------------------------------
$mail = 'jeremie@doranco.fr';

echo strpos( $mail, "@" ) . '<br>';
	//strpos( arg1, arg2 ) : indique la position d'un caractère dans une chaine
		//arg1 : la chaine à parcourir
		//arg2 : le caractère où l'on veut afficher la position

	//ATTENTION : Ici, on affiche 7 car on commence à compter à partir de zero !!

//--------------------------------------
echo strlen( $mail ) . '<br>';
//strlen( chaine ) : permet de retourner la taille de la chaine passée en paramètre

//--------------------------------------
$texte = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

echo substr( $texte, 0, 20 ) . "...<a href='#'> Lire la suite </a>";
	
	//substr( arg1, arg2, arg3 );
		//arg1 : la chaine que l'on souhaite découper
		//arg2 : la position de départ
		//arg3 : longueur de la découpe

//----------------------------------------------------------------------
echo "<h2> Fonctions utilisateurs </h2>";

//Ici, déclaration d'une fonction nommée "separation" toujours avec des parenthèses mais qui est prévue pour ne pas recevoir d'argument
function separation(){

	echo "<hr><hr><hr>";
}

separation(); //Appel et exécution de la fonction (toujours avec les parenthèses)

//-------------------------------------------------
function bonjour( $qui ){ //fonction avec UN argument (ici, '$qui')

	return "Bonjour $qui <br>";
}

//Si la fonction est prévue pour recevoir un argument ALORS il faut absolument lui envoyer un argument en paramètre de la fonction (si pas de valeur par défaut...)
echo bonjour( 'manon' );

//Quand il y a un "return" dans la fonction, il faut faire un "echo" de la fonction pour avoir un affichage

//-------------------------------------------------
function jourSemaine(){

	$jour = '<h2>mercredi</h2>'; //variable LOCALE !! Sera disponible uniquement dans le scope de la fonction

		//echo "On affiche quelque chose<br>"; //Ca fonctionne ! Ca s'affiche

	return $jour; //la fonction va retourner quelque chose (ici, la valeur de la variable $jour) ET à ce moment/endroit précis, on va quitter la fonction

	echo "test<br>"; //cette ligne ne fonctionnera pas car il y aun "return" jsute avant et donc on a déjà quitté la fonction
}

echo jourSemaine() . '<br>'; //Ici, on demande l'affiche et on appelle la fonction pour l'exécuter.

// echo $jour . '<br>'; //error "undefined" car elle n'est pas définie pas dans l'espace gloable mais uniquement dans le scope de la fonction. Et donc le code ne s'exécute QUE si l'on fait appel à la fonction.

//-------------------------------------------------
function tva( $nombre ){

	return $nombre * 1.2;
}

echo "100€ avec un taux de 20% vaut : ". tva( 100 ) . "€<br>";

//-------------------------------------------------
// EXERCICE : Amélioration la fonction tva() afin que l'on puisse calculer un nombre avec un taux de notre choix (BONUS : mettre un taux par défaut !)

	// IMPOSSIBLE DE NOMMER 2 fonctions de la meme manière !!!

function tva2( $nombre, $taux = 1.2 ){

	// $taux = 1.2 correspond à un taux par défaut si cet argument n'est pas renseigné lors de l'appel de la fonction

	$total = $nombre * $taux;

	return $total;
}

echo "Exemple avec une tva a 5,5 : " . tva2( 500, 1.055 ) . '<br>';

echo "Exemple sans préciser la tva (par défaut 20%) : " . tva2( 500 ) . '<hr>';

//-------------------------------------------------
//------------------------------
//EXERCICE : Créer une fonction meteo qui attendra deux arguments (saison, temperature) qui permet d'afficher : 
	//" Nous sommes en saison et il fait temperature degrés <br>";

	//-------------------------------------------------------
	//SUITE Exercice : Gérer l'article 'au' SI la saison est 'printemps' et gérer le 's' de degré SI on est strictement au dessus de 2° ou en dessous de -2°

function meteo( $saison, $temperature ){

	if( $saison == 'printemps' ){ //SI la saison est égale à 'printemps', ALORS je vais créer une variable avec la valeur 'au'

		$article = ' au ';
	}
	else{ //SINON, c'est que c'est forcément, hiver, été ou automne et donc on crée cette meme variable avec la valeur 'en'

		$article = ' en ';
	}

	//version ternaire :
	//$article = ( $saison == 'printemps' ) ? " au " : " en ";

	if( $temperature >= 2 || $temperature <= -2 ){ //SI la temperature est supérieur à 2 OU que la température est inférieur ou égale à -2 ALORS on déclare une variable avec en valeur 'degréS'

		$temp = ' degrés';
	}
	else{ //SINON, c'est que l'on se trouve dans l'interval ]2:-2[, LAORS on déclare cette meme variable avec en valeur 'degré'

		$temp = ' degré';
	}

	//version ternaire :
	//$temp = ( $temperature >= 2 || $temperature <= -2 ) ? " degrés" : " degré";

	echo "Nous sommes $article $saison et il fait $temperature $temp <br>";
	//echo 'Nous sommes'.$article.' '.$saison.' et il fait '.$temperature.' '.$temp.'<br>';

	//AUTRE VERSION :
	// if( $saison == 'printemps' ){ //SI c'est printemps on affiche la phrase avec 'au'

	// 	//Gestion de la temperature et du 's' au mot degré
	// 	if( $temperature >= 2 || $temperature <= -2 ){ 

	// 		echo "Nous sommes au $saison et il fait $temperature degrés <br>";
	// 	}
	// 	else{ 

	// 		echo "Nous sommes au $saison et il fait $temperature degré <br>";
	// 	}
	// }
	// else{ //SINON, c'est hiver, ete ou automne, on affiche la phrase avec 'en'

	// 	//Gestion de la temperature et du 's' au mot degré
	// 	if( $temperature >= 2 || $temperature <= -2 ){ 

	// 		echo "Nous sommes en $saison et il fait $temperature degrés <br>";
	// 	}
	// 	else{ 

	// 		echo "Nous sommes en $saison et il fait $temperature degré <br>";
	// 	}
	// }
}

meteo('été', 34);
meteo('printemps', 1);
meteo('hiver', -1);
meteo('automne', 12);
meteo('automne', 35);

//-----------------------------------------
//Les opérateurs : Pour tester les variables, on peut utiliser TOUS les opérateurs de comparaison !
/*
	- égalité : '==' renvoie TRUE si les opérandes sont égales
	- différent de : '!=' renvoie TRUE si les opérandes NE SONT PAS EGALES
	- strictement égal : '===' renvoie TRUE si les opérandes sont EGALES ET DU MEME TYPE
	- strictement différent : '!==' renvoie TRUE si les opérandes NE SONT PAS EGALES OU NE SONT PAS DU MEME TYPE
	- plus grand que : '>'
	- plus grand ou égal à : '>='
	- plus petit que : '<'
	- plus petit ou égal à : '<='

Les instructions dans la condition renvoient toujours TRUE ou FALSE et les instructions de la condition ne seront exécutées QUE si la valeur renvoie TRUE !
*/
echo '<hr>';
//-----------------------------------------
$pays = 'France'; //déclaration d'une variable dans l'espace GLOBAL

echo $pays .'<br>'; //France

function affichePays(){

	global $pays; //le "return" qui suit ne fonctionnerait pas si nous n'avions pas mis le clé "global" qui permet d'importer tout ce qui va être déclaré dans l'espace global à l'intérieur de l'espace local, ici le scope de la fonction

	// $pays = 'Maroc'; //Ca fonctionne car la variable est déclarée directement dans l'espace local (le return fonctionnerai ci-dessous)

	return $pays;
}

echo affichePays(); //appel et exécution de la fonction

//-------------------------------------------------------------------------------
echo '<h2>Structures itératives : les boucles</h2>';
//Une structure itérative (une boucle) permet de répéter une portion de code 

//boucle WHILE :
$i = 0 ; //initialisation

while( $i < 5 ){ //TANT QUE $i est inférieur à 5, on exécute le code entre les acollafes

	echo "$i => ";

	$i++; //incrémentation : $i = $i + 1
}

//resultat : 0 => 1 => 2 => 3 => 4 =>
echo '<hr>';

echo "Valeur de i après la première boucle : $i <br>";

//-------------------------------
//EXERCICE : Enlever la flêche à la fin
	// résultat attendu : 0 => 1 => 2 => 3 => 4

$i = 0; //réinitialisation de i à zero car avec la boucle précédente, i vaut 5

//Autre syntaxe pour la boucle while :
while( $i < 5 ) : //ici, les ':' remplacent l'accolade ouvrante de la boucle while

	if( $i == 4 ){

		echo $i;
	}
	else{

		echo "$i => ";
	}

	$i++;

endwhile; //Ici, le 'endwhile' remplace l'accolade fermante de la boucle while

echo "<hr>";
//-------------------------------------------
//Boucle FOR :
for( $i = 0 ; $i < 11 ; $i++ ){ //initialisation; condition; incrémentation

	echo $i . '<br>';
}

/*
Une boucle 'for' va répéter un nombre de fois défini l'instruction que l'on demande à répéter

A la différence d'une boucle 'while' qui va répéter indéfiniment l'instruction TANT QUE la condition n'est pas réalisée

Si l'on doit faire une boucle MAIS que l'on ne sait pas combien de fois on va passer dans la boucle, on utilisera une boucle 'while' !!
*/

//-------------------------------------------
// EXERCICE : affichez un select avec 31 options (via une boucle 'for') sans le SENS INVERSE !

echo "<select name=''>";

	for( $jour = 31; $jour >= 1 ; $jour-- ){ //31 tours de boucle ! 

		echo "<option value='$jour'> $jour </option>";
	}

echo "</select> <hr>";

//---------------------------------------------------
// EXERCICE : affichez les numéros de 1 à 10 dans un tableau sur UNE SEULE LIGNE !
echo "<table border='1'>";
	echo "<tr>";

		for( $i = 1; $i <= 10; $i++ ){

			echo "<td> $i </td>";
		}

	echo "</tr>";
echo "</table> <hr>";

//---------------------------------------------------
// EXERCICE : (boucles imbriquées) Créer un tableau avec 10 lignes contenant 10 cellules allant de 1 à 100 !

$compteur = 1; //Déclaration d'une variable avec la valeur de 1 (initialisation)

echo "<table border='3'>";

	for( $ligne = 1; $ligne <= 10; $ligne++ ){ //10 tours de boucles (pour les 10 lignes)
		
		echo "<tr>";

			for( $cellule = 1; $cellule <= 10; $cellule++ ){ //10 tours de boucles (pour les 10 cellules )

				//On passe 100 fois ici (création des 100 cases)
				echo "<td> $compteur </td>"; 
				$compteur++; //On incrémente donc on rajoute +1
			}

		echo "</tr>";
	}

echo "</table>";

//----------------------------------------------------
//Autre version :
echo "<table border='1'>";
	for($ligne = 0; $ligne <= 9 ; $ligne++) //10 tours de boucle
	{
	    echo "<tr>"; 

	    	for($colonne = 1; $colonne <= 10; $colonne++) //10 tours de boucles
    		{
        		echo "<td>" . ( (10 * $ligne) + $colonne ) . "</td>"; 
    		}
	    echo "</tr>";
	} 
echo "</table><hr>";

//-------------------------------------------------------------------------------
echo '<h2> les arrays (les tableaux) </h2>';

//declaration d'un array en utilisant la fonction array(): 
$liste = array('marco', 'polo', 43, 'pomme', true);

$fruit = array('p' => 'pomme', 'c' => 'cerise', 'a' => 'abricot');

// echo $liste; //ERROR, ON NE PEUT PAS AFFICHER UN TABLEAU TEL QUEL ! Il faut parcourir les données du tableau

//Affichage des infos des tableaux :
echo "<pre>";
	var_dump( $liste );
	var_dump( $fruit );
echo "</pre>";

echo "<hr>";

echo "<pre>";
	print_r( $liste );
	print_r( $fruit );
echo "</pre>";

//Affichez 'polo' :
echo $liste[1] . '<br>'; 

//Pour faire un affichage d'un élément d'un tableau, il faut appeler le tableau et entre crochets, on précise l'indice de l'élément que l'on souhaite afficher.

//Affichez 'cerise' :
echo $fruit['c'];

//------------------------------------------------
//Autre manière de déclarer un tableau :
$tableau = ['carotte', 'courgette', 'artichaud', 'poivron', 'citrouille', 'tomate'];

$tableau[] = 'epinard'; //Ici, on AJOUTE une valeur à notre tableau ($tableau)

echo '<pre>';
	print_r( $tableau );
echo '</pre>';

echo $tableau[ 4 ] . '<br>'; //ici, on affiche citrouille

//---------------------------------------------------
//parcourir toutes les données du tableau '$tableau'à l'aide d'une boucle 'for' car ici les indices sont numériques

//Count() et sizeof() : permettent de renvoyer la table d'un tableau
echo "Taille du tableau liste : " . count( $tableau ) . '<br>';
echo "Taille du tableau liste : " . sizeof( $tableau ) . '<hr>';

for( $i = 0; $i < 7; $i++ ) {

	echo "Valeur de i = $i correspond à l'élément du tableau : ". $tableau[ $i ] .'<br>';
}

//-------------------------------------------------------------------------------
echo '<h2> La boucle foreach() </h2>';
//La boucle foreach() fonctionne UNIQUEMENT sur les tableaux (ou objects). Elle retournera une erreur si l'on tente de l'exécuter sur une variable autre qu'un array (ou object)

//foreach() : permet de passer en revu les données du tableau

	// le mot clé 'AS' est OBLIGATOIRE, il fait parti de la boucle foreach!

//Si il a deux variables (ici, $key et $value) en argument APRES le mot clé "AS", la première ($key) parcours la colonne des indices et la seconde ($value) parcours la colonne des valeurs du tableau.
foreach( $tableau as $key => $value ){

	echo "L'indice : $key correspond à la valeur : $value <br>";
}

//SI il  n'y a qu'UNE SEULE variable en argument APRES le mot clé "AS", alors cette vairable parcours la colonne des valeurs
foreach( $tableau as $valeur ){

	echo "$valeur <br>";
}

//-----------------------------------------------
//Autre syntaxe => On remplace l'accolade ouvrante par les ':' et l'accolade fermante par 'endforeach' 
foreach( $tableau as $legume ) :

	echo $legume . ' / ';

endforeach;

//-------------------------------------------------------------------------------
echo '<h2> Les arrays multidimentionnels </h2>';
//les arrays multidimentionnels sont des tableaux imbriqués dans un autre tableaux

$multi = array( 
				0 => array( 'prenom'=>'marco', 'nom'=>'polo' ), 
				1 => array( 'prenom'=>'jean', 'nom'=>'jacques' ), 
				2 => array( 'prenom'=>'bob', 'nom'=>'dylan' ) 
			);

echo '<pre>';
	print_r( $multi );
echo '</pre>';

//Affichez "marco" : 
echo $multi[0]['prenom'] . "<hr>";

//------------------------------------------------
//EXERCICE : Parcourir/afficher toutes les infos de mes tableaux imbriqués ($multi) : grâce aux boucles foreach :
foreach( $multi as $indice => $sous_tableau ){

	foreach( $sous_tableau as $cle => $valeur ){

		echo "$valeur <br>";
	}
}

echo "<hr>";
//----------------------------------------------
foreach( $multi as $sous_tableau ){

	foreach ($sous_tableau as $valeur ) {

		echo "$valeur <br>";
	}
}

//-------------------------------------------------------------------------------
echo '<h2> Les objets </h2>';
//les objets sont un autre types données. Un peu à la manière des arrays , il permet de regrouper des informations
//ici, on parlera des propriétés (=variables) et de méthodes (=fonctions)

class Etudiant{

	public $prenom = 'Jeremie'; //public : permet de dire que la propriete est accessible PARTOUT (il existe aussi : 'protected', 'private')

	public $age = 45;

	public function pays(){

		return 'France';
	}
}
//Une classe est un constructeur d'Objet. 
//Un objet un conteneur symbolique qui possède sa PROPRE existance et incorpore des informations (propriétés) et des mécanimes (methodes)

$etudiant1 = new Etudiant; //le mot clé "new" permet d'instancier (déployer) la classe Etudiant et d'en faire une instance donc un Object ! On se servira de ce qu'il y a à l'intérieur de la classe via l'objet

//echo $etudiant1; //ON NE PEUT APS AFFICHER un objet tel quel !

print '<pre>';
	var_dump( $etudiant1 );
	print_r( $etudiant1 );
print '</pre>';

//Affiche 'Jeremie':
echo $etudiant1->prenom . '<br>'; //Dans un array, on va récupérer une information avec des crochets [], ALORS qu'ici, avec les objets on utilisera le symbole fleche '->' pour accéder aux informations de la classe.

echo $etudiant1->age . '<hr>';

print '<pre>'; 
	print_r( get_class_methods( $etudiant1 ) );
	//get_class_methods( $object ) : permet de voir les méthodes disponibles sur un objet
print '</pre>';

//appel de la méthode TOUJOURS avec les PARENTHESES !!
echo $etudiant1->pays() .'<hr>';

//-----------------------------------
$etudiant2 = new Etudiant; 

print '<pre>';
	var_dump( $etudiant2 );
	print_r( $etudiant2 );
print '</pre>';

//-------------------------------------------------------------------------------
echo '<h2> Les inclusions </h2>';

echo "Premières fois : ";
include "exemple.inc.php"; //inclusion du fichier nommé "exemple.inc.php" qui ici se trouve dans le meme dossier

echo "Deuxième fois : ";
include_once "exemple.inc.php"; //le "once" permet de vérifier si le fichier a déjà été inclus. Si c'est le cas, il ne ré-inclus pas !

//----------------------------------------------------
echo "<hr>Premières fois : ";
require "exemple.inc.php"; 

echo "Deuxième fois : ";
require_once "exemple.inc.php";

//Différence entre include et require où les deux permettent de faire une inclusion:
	// include : affiche un message d'erreur (inclusion a foiré) et continue l'exécution du script
	// require : affiche un message d'erreur (inclusion a foiré) et STOP l'exécution du script

echo "<h2> FIN </h2>";



















echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";