<?php
//https://grafikart.fr/tutoriels/mvc-model-view-controller-574

require_once "autoload.php";

use Model\Produit;
use Model\Person;

function printArray($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
/*
$monProduit = Produit::findByColumn("id",2); // new static -> new Produit()
if($monProduit){
    echo $monProduit->id .",Nom :".$monProduit->name.", Price:".$monProduit->price.",type:".$monProduit->type."</br>";
} else echo "404 Produit not found";
*/

echo "Base initiale</br>";
printArray(Person::$data);
//Read
$maPerson = Person::findByColumn("id",2); // new static -> new Person()
if($maPerson){
    echo $maPerson->id .",Nom :".$maPerson->name.", Price:".$maPerson->fav_colour."</br>";
}
else echo "404 Person not found";

//Update
$maPerson->fav_colour = "purple";
$maPerson->update();
echo "Base Modifiée</br>";
printArray(Person::$data);

//Create
$newPerson = new Person();
$newPerson->name="me";
$newPerson->fav_colour ="yellow";
$newPerson->persist();
echo "Base Create</br>";
printArray(Person::$data);

$maPerson->delete();
echo "base Delete";
printArray(Person::$data);

echo $_SERVER['REQUEST_URI']."<br/>";