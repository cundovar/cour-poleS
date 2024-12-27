<?php

namespace Model;

/**
* cette classe gère l'accès aux données de manière générique
*/
abstract class AbstractModel {
    protected static $data = []; // Déclaration de la variable $data comme un tableau vide
    //Cette fonction static, va rechercher dans un tableau de données
    // des entités qui auront une colonne affectée à la valeur voulue
    public static function findByColumn($column,$value){
        //Parcours de la liste d'entité, pour trouver la valeur recherchée de ma colonne
        foreach(static::$data as $row){
            //Si je trouve ma valeur, je fais une nouvelle de ma classe Courante
            if($row[$column] == $value){
                $instance = new static;

                //J'affecte les  propriétés de mon instance
                foreach($row as $key => $value){
                    $instance->{$key} = $value;
                }
                //Je retourne mon instance
                return $instance;
            }
        }

        return false;
    }

    /**
    * Cette persiste mon instance sur laquelle j'appelle la méthode
    * Persister = Sauvegarder
    */
    public function update(){
        foreach(static::$data as & $row){
            if($row['id'] == $this->id){
                foreach($this as $key => $value){
                    $row[$key] = $value;
                }
            }
        }
    }
    /**
    * Cette méhode créer une nouvelle entrée de mon entité à condition qu'elle n'aie pas d'id affecté
    */

    public function persist(){
    
        if(!isset($this->id) && empty($this->id)){
            $entry=array();
            unset($this->id);
            foreach($this as $key => $value){
                $entry[$key]=$value;
            }

            $entry['id']=end(static::$data)['id'] + 1;
            static::$data[]=$entry;
        }
    }

    /**
    * Cette methode supprime des entrée de ma base de donnée
    */
    public function delete(){
        if(isset($this->id) && !empty($this->id)){
            for($i = 0; $i< count(static::$data); $i++){
                if($this->id == static::$data[$i]['id']){
                    unset(static::$data[$i]);
                }
            }
        }
    }

    public static function listAll(){
        return static::$data;
    }
}