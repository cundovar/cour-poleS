<?php

//*****************************************BDD */
$mysqli=new mysqli("localhost","root","votre_mot_de_passe","site");
if($mysqli->connect_error)
{//affiche un message et termine le script en cour   =  die
    die('🚩un probleme est survenu lors de la tentative de connection a la base de données:'.$mysqli->connect_error);
}




// *************************************SESSION
// demarage de la session
session_start();

// ****************************************CHEMIN
// creation d'un constante
define("RACINE_SITE","/site/");

// ***************************************VARIABLE
// on initialise la variable contenu vide pour eviter les erruer
$contenu='';

// *******************************AUTRES INCLUSIONS
//on inclu le fichier des fonctions
require_once("fonction.inc.php");

// debug($mysqli);