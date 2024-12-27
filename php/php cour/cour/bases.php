<style>
    h2{
        background:black;
        color:orange;
        text-align:center
    }
    .rouge{
        color:tomato;
    }
    </style>
    <h2> Ecriture et affichage </h2>
<!-- balise php -->
    <?php
    // on ouvre la balise
    // le point virgule est obligatoir
    

    ?> <!-- on ferme la balise -->


    <?php
    echo"bonjour"; 
    // echo est une instruction qui permet de faire un affichage
    echo '<p class="rouge"> salut</p>';
    print"<strong>coucou</strong>"; // c'esr la meme que echo
    
    
    ?>
    <?php
    echo "<p> on est mardi</p>";
    ?>
    <h3><?php echo "ici on affichera une variable";?></h3>

<!-- ***********************raccourci ***********-->
<?= // remplace le echo c'est la meme
 "<p> on est mercredi</p>";
?>
<!-- *********************************** -->

<h2>les variables : les types, declaration et affectation</h2>

<?php

//une varaible est un espace nommé qui permet de conserver une ou des valeurs
// déclaration d'une variable avec le symbole '$'
// par convention on ne doit pas nommer une varaible par un chiffre ou un underscore

$a=234;           //ici on déclare une variable et on lui affecte une valeur 234
echo $a . '<br>';

echo gettype ($a).'<br>';    // interger ( nombre entier)
// gettype() fonction predefini de php qui permet de connaitre le type de variable => ici 'interger'

$a="chaine de caractère";
echo gettype($a).'<br>';    // string

$a="54";
echo gettype($a).'<br>';   // considere comme string comme javascript les guillemet

$a=1.2;
echo gettype ($a).'<br>';   // double nombre a virgule

$a=false;
echo gettype ( $a).'<br>';  // booleen

//****************** */
echo"<h2>la concaténation</h2>";

// avec le symboe "point".
// perment de rassembler des chaines de caractère et des variables

$hello="bonjour";
$everyone='tout le monde';
echo '<p>'.$hello.' '.$everyone.'</p>';

// les double quote (guillemet) permettent d'interpreter les variable alors que les quotes simple ( apostrophe) n'interprtre pas les variable et chaine de caractères

echo '$hello $everyone <br>';// affiche $hello $everyone <br>
echo "$hello $everyone <br>";//affiche les variables 

echo "<h2> la coocatation lors des affectations </h2>";
$prenom='marco';
echo $prenom."<br>"; //affiche marco
$prenom='polo'; //remplace marco par polo
echo $prenom."<br>";

$speudo='anne';

echo $speudo.'<br>';   // affiche anne

$speudo.='-marie';   // concatenation lors de l'affectation ici on afecte la valeur -marue sur la variable $speudo mais cela s'ajoute sans la remplacer grace " .= " sans espace

echo $speudo.'<br>';

echo "<h2> les constante magique </h2>";

// une constaant est un espace nommé qui permet de censerver la valeur sauf que comme sont nom l'indique la valeur sera constante

define('CAPITALE','paris');
//par convention une constante se déclare tjs en MAJ 
// define( ARG1,arg2)
// arg1 nom de la consranre
// arg2 valeur de la constante

echo CAPITALE.'<br>';//affiche paris


// *********************
//constante magique 
//https://www.php.net/manual/fr/language.constants.magic.php

echo __LINE__.'<br>';// affiche le numero de la ligne
echo __FILE__.'<br>';// chemin complet vers le fichier courant
echo __DIR__.'<br>';// chemin complet vers le dossier  courant

// :********************

echo "<h2> exercice </h2>";
//afficher "bleu-blanc-rouge" en creant des variables

$bleu='bleu';
$blanc='blanc';
$rouge='rouge';

echo "$bleu - $blanc - $rouge <br>";

echo $bleu. '-'.$blanc.'-'.$rouge.'<br>';

$couleur ='bleu';
$couleur.='-blanc';
$couleur.='-rouge';
echo $couleur.'<br>';

echo "<h2> operateurs arithmetiques </h2>";
$a=10;
$b=2;
echo $a+$b.'<br>';//12
echo $a-$b.'<br>';//8
echo $a*$b.'<br>';//20
echo $a/$b.'<br>';//5

//operateur etaffectation

$a+=$b;   // = $a=$a+$b
echo $a.'<br>';  //12

$a-=$b;
echo $a.'<br>';

$a*=$b;
echo $a.'<br>';

$a/=$b;
echo $a.'<br>';


echo "<h2> structure conditennelles (if/else) </h2>";

//isset() et empty() 2 fonction interne à php
// isset() test si cela existe ( si c'est defini)
// empty() test si cest vide ( 0 ou non defini)

$vara=0;
$varb='';


if(empty($vara)){// si cest vide,0 ou non defini alors on execute le code
echo "la variable vara: 0,vide ou non defini <br>";
}


// vide je discutait ave anita




$a=10;
$b=5;
$c=2;
if ($a>$b){
    echo " a=$a est bien sup à b=$b <br>";
}
else{
    echo "a n'est pas superier à b <br>";
}

// **********
if ($a<$b){
    echo " a=$a est bien sup à b=$b <br>";
}
else{
    echo "a n'est pas superier à b <br>";
}
// **********

// => et &&
if ($a >$b && $b>$c){
    echo"ok pour les deux conditions <br>";
}

// *********
// OU ||
if ($a ==8 || $b>$c){
    echo" ok une des deux valeurs est ok <br>";
}

// ********
//if/ elseif/ else/
 if( $a==8){
     echo "a est egal a 8 <br>";
 }
 elseif($a!=10){
     echo "a est diffrent de 10 <br>";
 }
 else{
     echo "tout est faux <br>";
 }


 //****************** */
 //comparaison

 $var1=1;
 echo '$var1 est de type '. gettype($var1).'<br>';
 $var2="1";
echo '$var1 est de type '. gettype($var2).'<br>';

if($var1==$var2){
    echo "l'egalite est vrai car la valeur est la même <br>";
}

// ***********
if($var1===$var2){
    echo "l'egalite est vrai car la valeur est la même <br>";
}
else{
    echo "l'egalite est fausse car la valeur est la même mais le type est ifférent <br>";
}

// = affectation
// == comparaison en valeur
// === comparaison en valeur et en type

//condition swicth
echo "<h2> condition switch </h2>  ";

$couleur='jaune';
// switch($couleur)
    // case 'bleu':
            //  echo "vous aimez le bleu";
    // break;
// 
    // case 'vert':
            //  echo "vous aimez le vert";
    // break;
// 
// 
    // case 'rouge':
            //  echo "vous aimez le rouge";
    // break;
    // default: 
            //  echo "vous n aimez la couleur <br>";
    // 

 //********* 

// if( $couleur=="bleu"){
    // echo "vous aimez le bleu";
//  }
// else if($couleur=="vert"){
    //  echo "vous aimez le vert";
    //  }
// 
// elseif($couleur=="rouge") {
    // echo "vous aimez le vert";
//    
//  }
// else{
    //  echo " vous n'aimez pas les couleurs <br>";
//  }
// autre possibilité
// 
// if( ($couleur=='bleu')||($couleur=='vert')||($couleur=='rouge') ){
    // echo "vous aimez la couleur" :"vous n'aimez pas la couleur";
// }
//voir corection
  













