<?php
spl_autoload_register(function (string $classe) {
    $sources = "./" ;
    $fichier = $sources . str_replace('\\', '/', $classe) . '.php';

    if (file_exists($fichier)) {
        require_once $fichier;
    }
});