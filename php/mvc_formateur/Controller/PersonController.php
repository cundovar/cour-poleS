<?php
namespace Controller;

use Model\Person;

class PersonController {

    public function listAllPerson(){
        $persons = Person::listAll();
        include 'Vue/list_persons.php';
    }

    public function createPerson(){
        echo "on va créer une personne ici";
    }

}