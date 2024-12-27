<?php

//class s'occupe des ingredients d'un plat
// class Recette{
//    private array $ingredient;
//    private $nonRecette;
//    public function __construct( array $ingredient){
    //    $this->ingredient=$ingredient;
// 
//    }
//    public function getIngredient(){
    //    $this->ingredient;
// 
//    }
//    public function setIngredient(){
    // $this->ingredient;
// }
  
  
  
// }

// $menu=array(
    // "Gratin"=> new Recette($ingredient),
    // "Purée"=> new Recette(),
    // "Pizza"=> new Recette() 
// );

// class premettent affivher plat et recette
class menu{
    private $plat;
    private $ingredient;

    public function __construct($plat, array $ingredient)
    {
        $this->plat=$plat;
        $this->ingredient=$ingredient;
        
    }




    public function getIngredient(){
        $this->ingredient;
    }
    public function setIngredient(){
     $this->ingredient;
    }
    public function getPlat(){
        $this->plat;
    }
    public function setPlat(){
     $this->plat;
    }




    public function menu(){
        // implode($ingredient);
       return $this->plat." : ".$this->$_POST('ingredient');
    }
   
}

$plat1=new Menu('Gratin',['pomme de terre','crême','fromage']);
echo '<pre>';$plat1->menu();echo '</pre>';



// class Controller{
    // public function ajouterPlat(){
        // global $plats;
        // $quantity = $_POST["quantity"];
        // $description = $plats[$_POST["plat"]];
        // 
// 
// }


