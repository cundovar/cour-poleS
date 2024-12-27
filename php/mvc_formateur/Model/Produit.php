<?php
namespace Model;

class Produit extends AbstractModel {

    //C'est ma base de données de produit
    public static $data = array(
        array(
            'id' => 1,
            'name' => 'Tomate',
            'price' => '2',
            'type' => 'Legume'
        ),

        array(
            'id' => 2,
            'name' => 'Jambon',
            'price' => '5',
            'type' => 'Viande'
        )
    );
}