<h1>formulaire 3</h1>
<a href="formulaire2.php"> aller formaulaire 2</a>
<hr>
<?php
print '<pre>';
print_r($_POST);
print '<pre>';

if(empty( $_POST['pseudo'])||empty( $_POST['email']) ){ 
    echo " ERREUR tous les champs champs oligatoire";
}

    else{

        echo "Prénom posté :  $_POST[pseudo] <br>";
    
        echo "email postée : $_POST[email] <hr>";
    }
    // ************* autre possibilité****************

    if(empty( $_POST['pseudo'] )){ 
        echo " ERREUR pseudo champs oligatoire";
    }
    
    else{
    
            echo "Prénom posté :  $_POST[pseudo] <br>";
        
        //    _________

        }

    if(empty( $_POST['email']) ){ 
            echo " ERREUR email champs oligatoire";
        }
        
    else{
            
            echo "email postée : $_POST[email] <hr>";
        }   
/*
        1 - Créer un fichier fonction.inc.php : et créer une fonction calcul() qui va recevoir 2 arguments (fruit, poids) et qui va retourner la phrase :

 => utiliser une condition : qui selon le fruit sélectionné, on créera une variable $prix_kg

	"Les ... coutent ... € pour un poids de ... grammes" 

	=> pommes, bananes, cerises, poires (retournent un prix au kg)


2 - Créer une page lien.php. Prévoir 4 liens avec le nom des fruits afin de faire en sorte que lorsque l'on clique dessus, le prix du fruit ( pour 1 kg) s'affiche DANS LA MEME PAGE.


3 - Créer une page formulaire.php et réaliser un formulaire permettant de selectionner (select) un fruit et saisir un poids.
-> Affichez via la fonction calcul(), le resultat issue des infos du formulaire
-> bonus : faites en sorte de garder le dernier fruit sélectionné et le dernier poids saisie dans le formulaire lorsque celui-ci est validé.


4 - Créer une page array.php :
	4.1 - Déclarer un tableau avec tous les fruits : pommes, cerises, peches, bananes

	4.2 - Déclarer un tableau avec tous les poids suivants : 100, 500, 1000, 2000, 5000

	4.3 - Affichez les 2 tableaux

	4.4 - Sortir le fruit 'cerise' avec le poids 500 via les tableaux créés pour les transmettre à la fonction calcul() et ainsi obtenir le prix

	4.5 - Sortir TOUS les prix pour les cerises avec tous les poids (boucle)

	4.6 - Sortir tous les prix pour tous les fruits acvec tous les poids (boucles imbriquées)

		4.7 - faire un affichage dans un tableau ('table') pour un affichage plus 'propre'
*/