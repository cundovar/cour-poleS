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
    <h2> les tableaux array</h2>

    <?php
$liste=array('marco','polo',43,'pomme',true);
$fruit=array('p'=>'pomme','c'=>'cerise','a'=>'abricot');

echo "<pre>";
	var_dump( $liste );
	var_dump( $fruit );
echo "</pre>";

echo "<hr>";

echo "<pre>";
	print_r( $liste );
	print_r( $fruit );
echo "</pre>";


// afficher polo
echo $liste[1].'<br>';
//afficher cerise
echo $fruit['c'].'<br>';

// autre maniere de declarer un array
$tableau=['carotte','courgette','articahaud'];
echo "<pre>";
print_r($tableau);
echo "</pre>";

// ajouter une valeur au tableau
$tableau[]='epinard';
echo "<pre>";
print_r($tableau);
echo "</pre>";

//ajouter avec array_push c'est une fonction() fonction
array_push($tableau,'cerise');
echo "<pre>";
print_r($tableau);
echo "</pre>";

//parcourir toutes les valeurs du tableau avec vraiment beaucoup de valeur avec boucle for

for($i=0;$i<=4;$i++){
    echo $tableau[$i].'<br>';
}

// Count()et sizeof(): permettent de renvoyer la table d'un tableau
echo "taille du tableau liste;".count($tableau)."<br>";
echo "taille du tableau liste;".sizeof($tableau)."<br>";
for($i=0;$i < sizeof($tableau);$i++){
    echo $tableau[$i]."<br>";
    
}

// **************************
echo '<h2>la boucle foreach()</h2>';
//  fonctionne uniquement sur les tableau ou objet elle retourena une erreur si l'on tente de lexecuter sur une variable
// premet de passer en revu les données du tableau
// les mot clé AS est obligatoire
foreach($tableau as $key=>$value){
    echo"l'indice $key correspond à la valeur : $value <br>";
}

foreach($fruit as $key=>$value){
    echo"l'indice $key correspond à la valeur : 
$value <br>";
}

// si il ya une seul varaible apre AS ALORS LA VARIABLE PARCOURIRA la colonne valeur

foreach($tableau as $valeur){
    echo "$valeur <br>";
}

//autre syntaxe on remplace l'acolade ouvrante par le':' et laccolade fermante par 'endforeach'
foreach($tableau as $legume):
    echo $legume.'/';
endforeach;
echo "<br>";

// ********************les arrays multidimentionel************
echo '<h2>les array multidimentionnele</h2>';
//des tableaaus dans des tableaux
$multi=array(0=>'ZERO',1=>'UN',2=>'DEUX');
echo '<pre>';
print_r($multi);
echo '</pre>';

$multi2=array(
    0=>array('prenom'=>'jean','nom'=>'var'),
    1=>array('prenom'=>'bob','nom'=>'ich'),
    2=>array('prenom'=>'daniel','nom'=>'juju')
);


echo '<pre>';
print_r($multi2);
echo '</pre>';

//affiche daniel
// echo $multi2[2]['prenom']."<br>";
// afficher parcourir toutd les infos de mes tableaux $multi2
// 
// foreach($multi2 as $indice=>$sous_tableau):
    // foreach($sous_tableau as $cle=>$valeur)
    // echo $sous_tableau['prenom']."<hr>";
// endforeach;
// 
// voir corection
foreach( $multi2 as $indice => $sous_tableau ){

	foreach( $sous_tableau as $cle => $valeur ){

		echo "$valeur <br>";
	}
}

echo "<hr>";
//----------------------------------------------
foreach( $multi2 as $sous_tableau ){

	foreach ($sous_tableau as $valeur ) {

		echo "$valeur <br>";
	}
}

// ******************les objets*****************
echo "<h2>les objets</h2>";
// sont un autre types de données. un peu comme les array, permet de regrouper des infos
// on parlera des proprieté (=variable) et des methodes ( =fonction)

class Etudiant{
    public $prenom='jeremie';// public permet de dire que la proprieté est accecible partout( exixtse aussi protected, private)
    public $age=45;
    public function pays(){
        return'france';
    }
}
// une class est un constructeur d'ojet, un objet un conteneur symbolique qui possede sa propre existance et qui va incorporer des infos ( propriété) et des mecanisme( methode)
$etudiant1=new Etudiant;//le mot clé new permet de deployer la class etudiant et de faire une instance donc un objet. on se servira de ce qu'il y a l'interieur de la class via l'ojet
// echo $etudiant1; pas possible de l'afficher comme cela
print'<pre>';
var_dump($etudiant1);
print_r($etudiant1);
print ' </pre>';
//afficher jeremie
echo $etudiant1->prenom.'<br>';// ici on utilise une fleche ppour recuperer acceder aux infos de la class
echo $etudiant1->age.'<hr>';

print '<pre>';
print_r(get_class_methods($etudiant1));
print '</pre>';
echo $etudiant1->pays();


// ******************inclusions****************
echo "<h2>les inclusions</h2>";
echo "premiere fois";
include "exemple.inc.php";// inclusion du fichier qui se trouve dans le meme dossier

include_once "exemple.inc.php";
echo "deuxieme fois <hr>";

require "exemple.inc.php";
echo "premier fois <hr>";

require_once "exemple.inc.php";
echo "deuxieme fois <hr>";
echo "<h2>fin</h2>";

?>
