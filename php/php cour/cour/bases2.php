<style>
   h2{
       background:black;
       color:orange;
       text-align:center
   }
   .rouge{
       color:tomato;
   }
   </style>
   
   <?php

   echo"<h2> fonction prédefinies</h2>";

   echo 'Date :'.date("d/m/Y").'<br>';// met la date
//    https://www.php.net/manual/fr/function.date.php

echo 'Date :'.date("d-m-Y").'<br>';

$mail='cundo@ymail.com';
echo strpos($mail,"@").'<br>';   // strpos(arg1,arg2)indique la position d'un caractere dans une chaine de caractère
                //arg1 :la chaine à parcourir
                //arg2 : le caractère où l'on veut afficher la position numerique a partir de 0
                //https://www.php.net/manual/fr/function.strpos.php



echo iconv_strlen($mail).'<br>'; // permet de retourner la taille de la chaine demandé

$texte="kbvbhvytpguyfiovyuftyic  yftdyifguydrs_fphiufè yftrdrfuftrsig_ègf_d-_ç f_d_dçf-d_-uhihihjpojiuuuuuuuuuuhigiggggi";
echo substr($texte,0,20)."....<a href=''>lire la suite</a>";
//  arg1 chaine que l'in veut decouper, arg2 noùm de depart, nombre de fin la longueur souhiaté
//https://www.php.net/manual/fr/function.substr.php



// **************************
echo"<h2> fonction utilisateur</h2>";
//ici on creer une fonction separation qui n'a pas d'argument (rien entre parenthese)
 function separation(){
     echo "<hr><hr><hr>";

 }
 separation();//appel la fonction donc execute la fonction, toujour avec parentheses
//  ****************

 function bonjour($qui){// fonction avec un argument 
    return "bonjour $qui <br>";
}

echo bonjour('annie');// si la fonction est prevu pour recevoir un argument alors il faut lui envoyer un argement en parametre de la fonction
// quand il y a un return dans la fonction il faut appeller la fonction avec un echo

separation();
// ********************
 function jourSemaine(){
     $jour='mercredi<br>';// variable local
     echo "on affiche quelque chose<br>";// ça s'affiche

     return $jour;//reourne la valeur de la variable jour et a ce moment precis on quitte la fonction

     echo "test";// ça s'affiche pas ne fonctionne pas car il y a un return avant
 }

 echo jourSemaine().'<br>';
 separation();

//*************** */
// function tva($nombre){
    // return $nombre*1.2;
// }
// echo "100$ avec le taux de 20% vaut : ". tva(100)."$<br>";
// 
// 
// function tva1($nombre){
    // $taux=2;
    // return $nombre*$taux;
// }
// echo "100$ avec le taux ".$taux." vaut : ". tva1(100)."$<br>";
// 
// 
// corection***********************
// function tva2($nombre,$taux=1.2){
    // return $nombre*$taux;
// }
// echo tva(580,1.088).'<br>';







// *****************
function meteo($saison,$temperature){
    $nousSomme="nous sommes";
    $ilFait="et il fait";
    
    if($saison=="printemps"){
         $nousSomme=$nousSomme.  " au ";
    }
    else{
        $nousSomme=$nousSomme." en ";
    }
    
    if($temperature=="0"){
     $ilFait=$ilFait." ".$temperature." degré";
    }
    else{
        $ilFait=$ilFait." ".$temperature." degrés";
        
    }
    echo " $nousSomme $saison $ilFait .<br>";
            }
                meteo('primtemps',0);
                meteo('hiver',10);

echo "<br>";
// **********************************************************
                function meteo1( $saison, $temperature ){

                    if( $saison == 'printemps' ){ //SI la saison est égale à 'printemps', ALORS je vais créer une variable avec la valeur 'au'
                
                        $article = ' au ';
                    }
                    else{ //SINON, c'est que c'est forcément, hiver, été ou automne et donc on crée cette meme variable avec la valeur 'en'
                
                        $article = ' en ';
                    }

                    if($temperature <=0){
                        $s=" ";
                    }
                    else{
                        $s="s ";
                    }
                
                    echo "Nous sommes $article $saison et il fait $temperature degré$s <br>";
                
                    //echo 'Nous sommes '.$article.' '.$saison.' et il fait '.$temperature.' degrés <br>';
                }
                
                meteo1('été', 34);
                meteo1('printemps', -1);
                meteo1('hiver', 0);
                meteo1('automne', 12);


echo "<h2>les boucles</h2>";

// bouble while
$i=0;
 while($i<5){
     echo "$i=> ";
     $i++;
 }
 echo"<br>";
$i=0;
 while($i<5):
    if($i==4){
        echo $i;
    }
    else{
    echo "$i=> ";
    }
    $i++;
 endwhile;   
echo"<br>";
//  boucle for
for ($i=0;$i<11;$i++){
    echo $i.'<br>';
}

for ($i=0;$i<11;$i+=2){
    echo $i;
 }
 echo "<br>";
 echo "<br>";
 

// exo*********
echo "<select name=''>";
for ($jour=31;$jour>=1;$jour--){
    echo "<option>$jour</option>";
}

echo "</select>";

echo "<br>";
echo "<br>";



// ......................

echo "<table border='2'>";
echo "<tr>";
for ($td=1;$td<=10;$td++){
    echo "<td>$td</td>";
}
echo "</tr>";
echo "</table>";
// ............................

echo "<tr><table border='2'>";

for ($td=1;$td<=10;$td++){
    echo "<td>$td</td>";
}
echo "</tr></table>";

//exo 
//boucle imbriquer faire un tableau de 1 a 100 sur 10 ligne contenant 10cellules
// echo "<table border='1>";
// for($tr=1;$tr<=$NbLigne;$)

echo "<table border=2>";
for ($m=1; $m<10; $m++) {
   echo "<tr>";

   for ($j=1; $j<=10; $j++) {
         echo "<td>";

         for($l=1;$l<=100;$l++){
         echo "</td>";
         }
         
   }
   echo "</tr>";
}

echo "</table>";


// corection
$compteur=1;//declaration variable
echo $compteur; //vaut 1
echo "<table border='3'>";
for($i=1;$i<=10;$i++){
    echo "<tr>";
    for($l=1;$l<=10;$l++){
        echo"<td>$compteur</td>";//$compteur vaut 1
        $compteur++;// on demande +1  apres l'voir affiché,et la boucle recommence jusqu'a remplir le tableau
    }

    echo "</tr>";
}
echo "</table>";
echo $compteur;// la valeur de $compteur est desormais de 101


$compteur = 1; //Déclaration d'une variable avec la valeur de 1 (initialisation)

echo "<table border='3'>";

	for( $ligne = 1; $ligne <= 10; $ligne++ ){ //10 tours de boucles (pour les 10 lignes)
		
		echo "<tr>";

			for( $cellule = 1; $cellule <= 10; $cellule++ ){ //10 tours de boucles (pour les 10 cellules )

				//On passe 100 fois ici (création des 100 cases)
				echo "<td> $compteur </td>"; 
				$compteur++; //On incrémente donc on rajoute +1
			}

		echo "</tr>";
	}

echo "</table>";

//----------------------------------------------------
//Autre version :
echo "<table border='1'>";
	for($ligne = 0; $ligne <= 9 ; $ligne++) //10 tours de boucle
	{
	    echo "<tr>"; 

	    	for($colonne = 1; $colonne <= 10; $colonne++) //10 tours de boucles
    		{
        		echo "<td>" . ( (10 * $ligne) + $colonne ) . "</td>"; 
    		}
	    echo "</tr>";
	} 
echo "</table><hr>";



