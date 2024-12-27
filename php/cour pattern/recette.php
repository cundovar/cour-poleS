<?php

class Menu{
    private $plat;
    private $recette=array();

    public function __construct($plat,$recette)
    {
        $this->plat=$plat;
        $this->recette=$recette;
    }

    public function getPlat(){
        return $this->plat;
    }
    public function setPlat($plat){
        $this->plat = $plat;
    }

    public function getRecette(){
        return $this->recette;
    }
    public function setRecette($recette){
        $this->recette = $recette;
    }

    public function toString(){
        return $this->getPlat()." : ".$this->getRecette();
    }
}

class List_menu{
    private $menu = array();
    public function ajoutMenu($m){
        array_push($this->menu,$m);
    }

    public function suprimeMenu($m){
        array_splice($this->menu,$m);
    }
    public function afficherMenu(){
        foreach($this->menu as $menu){
            echo $menu->toString();
        }
    }
}

$menu1=new Menu("gratin","pomme de terre","creme","fromage");
$menu1->afficherMenu();

//find by ingredient
// delete recette
//in array