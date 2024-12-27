<?php
//https://grafikart.fr/tutoriels/mvc-model-view-controller-574

require_once "autoload.php";
define( "RACINE","/DP/teacher/MVC");

function printArray($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

echo $_SERVER['REQUEST_URI']."<br/>";
$myURL = substr($_SERVER['REQUEST_URI'],strlen(RACINE));
$routes = array(
    '/\/hello\/(.+)/' => array('Controller\HelloController', 'helloAction'),
    '/\/person\/$/' => array('Controller\PersonController','listAllPerson'),
    '/\/person\/create/' => array('Controller\PersonController','createPerson')
);

foreach($routes as $url => $action){

    //Ici je recherche ma regexp dans mon URL
    // See if the route matches the current request
    $matches = preg_match($url, $_SERVER['REQUEST_URI'], $params);
    printArray($params);
    // If it matches...
    if ($matches > 0) {

        // Run this action, passing the parameters.
        $controller = new $action[0];
        //unset($params[0]);
        if(count($params) == 1) {
            $controller->{$action[1]}();
        } else {
            $controller->{$action[1]}($params);
        }

        break;
    }
}