<?php

namespace Model;

class Person extends AbstractModel {
    //C'est ma base de données de personne

    protected static $data = array(

        array(
            'id' => 1,
            'name' => 'Johnny Greensmith',
            'fav_colour' => 'Green'
        ),

        array(
            'id' => 2,
            'name' => 'Mary Blueton',
            'fav_colour' => 'Blue'
        )
    );
}
