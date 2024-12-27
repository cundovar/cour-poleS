<?php
require_once 'inc/init.inc.php';
//------------------------------------- TRAITEMENT PHP ---------------------------------------//
//------------------------------------- AJOUT PANIER -----------------------------------------//
if(isset($_POST['ajout_panier']))
{
    $resultat = executeRequete("SELECT * FROM produit WHERE id_produit = '$_POST[id_produit]'");
    $produit = $resultat->fetch_assoc();
    ajouterProduitDansPanier($produit['titre'], $_POST['id_produit'], $_POST['quantite'], $produit['prix']);
}
//------------------------------------- AFFICHAGE HTML ---------------------------------------//
require_once 'inc/haut.inc.php';
echo $contenu;
echo "<table class='table table-bordered text-center mt-5'>";
echo "<tr><td colspan='6'><b>Panier</b></td></tr>";
echo "<tr><th>Titre</th><th>Produit</th><th>Quantité</th><th>Prix Unitaire</th><th>Action</th></tr>";
if(empty($_SESSION['panier']['id_produit']))
{
    echo "<tr><td colspan='6'>Votre panier est vide</td></tr>";
}
else
{
    for($i = 0; $i < count($_SESSION['panier']['id_produit']); $i++)
    {
        echo '<tr>';
            echo "<td>" . $_SESSION['panier']['titre'][$i] . "</td>";
            echo "<td>" . $_SESSION['panier']['id_produit'][$i] . "</td>";
            echo "<td>" . $_SESSION['panier']['quantite'][$i] . "</td>";
            echo "<td>" . $_SESSION['panier']['prix'][$i] . " €</td>";
            echo '<td>Retirer</td>';
        echo '<tr>';
    }
    echo "<tr><th colspan='4'>Total</th><td colspan='2'>" . montantTotal() . " €</td></tr>";
    if(internauteEstConnecte())
    {
        echo '<form method="post" action="">';
        echo '<tr><td colspan="6"><input class="btn btn-primary btn-lg" type="submit" name="payer" value="Valider le paiement ✅"></td></tr>';
        echo '</form>';
    }
    else
    {
        echo '<tr><td colspan="6">Veuillez vous <a href="inscription.php">inscrire</a> ou vous <a href="connexion.php">connecter</a> afin de pouvoir finaliser votre commande</td></tr>';
    }
    echo "<tr><td colspan='6'><a class='btn btn-warning' href='?action=vider'>Vider le panier</a</td</tr>";
}
echo "</table><br>";
echo "<div class='alert alert-info text-center'>💬 Règlement par CHEQUE uniquement à l'adresse suivante : 300 rue de vaugirard 75012 PARIS</div><br>";







require_once 'inc/bas.inc.php';