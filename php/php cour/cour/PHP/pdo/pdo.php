<?php

// SQL : 4 requetes à savoir :

// CRUD 
// 	create		=> requête INSERT (insertion en bdd)
// 	update		=> requête UPDATE (modification en bdd)
// 	delete		=> requête DELETE (suppression en bdd)

// 	read		=> requête SELECT (lire/récupérer les infos en bdd)

//----------------------------------------------------------------
//----------------------------------------------------------------

/*	PDO : PHP DATA OBJECT : Représente une connexion entre PHP et un serveur de base de données.

=> EXEC() :

	=> INSERT, UPDATE, DELETE :
		exec() est utilisé pour la formulation de requêtes ne retournant pas de résulat !
		exec() renvoi le nombre de lignes affectées par la requêtes

	Valeur de retour : 
		ECHEC : false
		SUCCES : 1 (ce nombre varie selon le nombre d'enregisrement affecté par la requête)

//-------------------------------------------------------------------
=> QUERY() :

	=> SELECT : Au contraire d'exec(), query() est utilisé pour la formulation de requêtes retournant un ou plusieurs résultats.

	Valeur de retour :
		ECHEC : false
		SUCCES : PDOStatement (objet) !!!!

//-------------------------------------------------------------------
=> PREPARE() puis EXECUTE() :

	SELECT, INSERT, UPDATE, DELETE :
		
		prepare() : permet de préparer sans exécuter
		execute() : permet d'exécuter la requête préparée

	Valeur de retour : 
		prepare() : renvoie TOUJOURS un PDOStatement (objet)
		execute() : ECHEC : false
					SUCCES : PDOStatement

=> Les requêtes préparées sont à préconiser si vous exécuter plusieurs fois la même requête et ainsi éviter de répéter le cycle (analyse/interprétation/exécution)
=> Les requêtes préparées sont souvent utilisées pour assainir les données (ex : prepare() / bindValue() / execute() )

exemple : pourquoi requêtes préparées :

	select * from employes; => 3cycles (analyse/interprétation/exécution)
	select * from employes; => 3cycles
	select * from employes; => 3cycles
	select * from employes; => 3cycles => 12 cycles 

	prepare : $req = select * from employes; => 2cycles (analysée et interprétée)

		-> execute($req); 1cycle (exécution)
		-> execute($req); 1cycle
		-> execute($req); 1cycle
		-> execute($req); 1cycle => 6 cycles
*/
//-------------------------------------------------------------------
echo '<h2>Connexion à la BDD</h2>';

$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8" ) );

//Argument de PDO :
	//arg1 : serveur + bdd
	//arg2 : identifiant
	//arg3 : mdp
	//arg4 : options (ici, la gestion des erreurs et l'encodage UTF8)

var_dump( $pdo ); //object(PDO) et cet objet va représenté la connexion avec la bdd !!

print '<pre>';
	print_r( get_class_methods( $pdo ) );
print '</pre>';

//--------------------------------------------------------------------------------
echo "<h2> EXEC() / INSERT / DELETE / UPDATE </h2>";

//INSERT (insertion)
// $resultat = $pdo->exec(" 

// 	INSERT INTO employes( prenom, nom, service, sexe, date_embauche, salaire) 

// 		VALUES ('jean', 'jacques', 'informatique', 'm','2020-10-10', 1212) 

// 	");
// //Insertion dans la table 'employes' pour les champs (prenom, nom, etc.) avec les valeurs correspondantes.

// echo "Nombre d'enregisrement affecté par la requête: $resultat <br>";

// echo "Dernier id généré : " . $pdo->lastInsertId() . '<br>';

//------------------------------------------------
//UPDATE (modification) :
$pdo->exec(" UPDATE employes SET salaire = 4444 WHERE id_employes = 991 ");
//Ici, on modifie dans la table 'employes' la collone 'salaire' A CONDITION que dans la colonne id_employes, ce soit égal à 991

//------------------------------------------------
//DELETE (suppression)
$pdo->exec(" DELETE FROM employes WHERE id_employes = 991 ");
	//REQUETES "DELETE" SONT IRREVERSIBLES !!
//Ici, on supprime dans la table 'employes' l'employé qui a l'id_employes 991

//--------------------------------------------------------------------------------
echo "<h2> QUERY() / SELECT / fetch() </h2>";

$pdostatement = $pdo->query(" SELECT * FROM employes WHERE prenom = 'Emilie' "); 
//Ici, je sélectionne TOUTES (*) les informations provenant de la table 'employes' A CONDITION que dans la colonne prénom, ce soit égal à "Emilie"

var_dump( $pdostatement ); //Object(PDOStatement)

print '<pre>';
	print_r( get_class_methods($pdostatement) );
print '</pre>';

//------------------------------------------
$emilie = $pdostatement->fetch( PDO::FETCH_ASSOC );
	
	//fetch() : permet de récupérer les résultats et de pouvoir les exploiter dans un tableau associatif.
	// PDO::FETCH_ASSOC : permet d'indéxer le tableau (retourné par le fetch()) avec les champs de la table

print '<pre>';
	print_r( $emilie );
print '</pre>';

echo "<p>Bonjour, je suis $emilie[prenom] $emilie[nom] du service $emilie[service] </p>";

foreach( $emilie as $indice => $valeur ){

	echo "$indice : $valeur <br>";
}

//--------------------------------------------------------------------------------
echo "<h2> QUERY() / SELECT / fetch() / while() </h2>";










echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";