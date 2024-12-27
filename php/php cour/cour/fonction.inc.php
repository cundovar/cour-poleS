<?php

function calcul($fruit,$poids){
    switch($fruit){
        case'pommes':$sprix_kg=1;break;
        case'bananes':$sprix_kg=2;break;
        case'poires':$sprix_kg=3;break;
        case'cerise':$sprix_kg=4;break;
        default :return " fruits inexistant";

    }
    $prix_total=$poids*($sprix_kg/1000);
   
   
    return "Les $fruit coutent $prix_total pour un poids de $poids grammes <br>";
}
echo calcul ('pommes',1000);
echo calcul ('cerise',1000);
echo calcul ('poires',1000);
echo calcul ('bananes',1000);