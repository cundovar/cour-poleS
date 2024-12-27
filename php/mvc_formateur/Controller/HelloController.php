<?
namespace Controller;

use Model\Person;

class HelloController {

    public function helloAction($params){
        $person = Person::findByColumn("id",$params[1]);
        if($person){
            include "Vue/hello.php";
        } else {
            echo "La personne avec l'id ".$id." n'existe pas";
        }
    }
    


}