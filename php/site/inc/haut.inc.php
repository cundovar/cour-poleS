<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Lexend+Deca:wght@300&family=Open+Sans:wght@300&family=Overpass:wght@100&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= RACINE_SITE; ?>inc/css/styles.css">
    <title>MONSITE</title>
</head>

<body>
    <header>
        <div class="conteneur">
            <span>
                <a href="<?= RACINE_SITE; ?>index.php">Monsite.com</a>
            </span>
            <nav>
                <?php
                if(internauteEstConnecteEtEstAdmin())
                {
                    echo '<a href="'.RACINE_SITE.'admin/gestion_membre.php">Gestion des membres</a>';
                    echo '<a href="'.RACINE_SITE.'admin/gestion_commande.php">Gestion des commandes</a>';
                    echo '<a href="'.RACINE_SITE.'admin/gestion_boutique.php">Gestion des produits</a>';
                }
                if(internauteEstConnecte())
                {
                    echo '<a href="'.RACINE_SITE.'profil.php">Profil</a>';
                    echo '<a href="'.RACINE_SITE.'panier.php">Panier</a>';
                    echo '<a href="'.RACINE_SITE.'connexion.php?action=deconnexion">se deconnecter</a>';
                }

                else
                {
                    echo '<a href="'.RACINE_SITE.'index.php">Acceil</a>';
                    echo '<a href="'.RACINE_SITE.'inscription.php">Inscription</a>';
                    echo '<a href="'.RACINE_SITE.'connexion.php">Connection</a>';
                    echo '<a href="'.RACINE_SITE.'panier.php">Panier</a>';
                }
                ?>
            </nav>

        </div>
    </header>
    <section>
        <div class="conteneur">

        </div>