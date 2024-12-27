<?php
require_once 'inc/init.inc.php';


//******************traitement PHP */
if(!internauteEstConnecte())
{
    header('location:connexion.php');
}

// ****************affichage HTML***********
require_once 'inc/haut.inc.php';
?>
<div class="jumbotron text-center mt-4">
    <h2>profil de <?=$_SESSION['membre']['pseudo']?> </h2>
</div>

<div class="container mt-4">
    <?php
    if($_SESSION['membre']['civilite']=='m' )
    {
        echo '<img src="https://picsum.photos/id/237/200/300" alt="photo de profil" style="clip-path:ellipse(50% 50%);">';
    }
    else{
        echo '<img src="https://picsum.photos/id/237/200/300" alt="photo de profil" style="clip-path:ellipse(50% 50%);">';
    }
    ?>
</div>
<div class="container text-center mt-4">
    
    <div class="alert alert-info text-center"> vos infos perso</div>
</div>

<table class="table table-bordered mt-4 text-center">
    <thead>
        <tr>
            <th scope="col">prenom</th>
            <th scope="col">nom</th>
            <th scope="col">email</th>
            <th scope="col">adresse</th>
            <th scope="col">code postal</th>
            <th scope="col">ville</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$_SESSION ['membre']['prenom'] ?></td>
            <td><?=$_SESSION ['membre']['nom'] ?></td>
            <td><?=$_SESSION ['membre']['email'] ?></td>
            <td><?=$_SESSION ['membre']['adresse'] ?></td>
            <td><?=$_SESSION ['membre']['code_postal'] ?></td>
            <td><?=$_SESSION ['membre']['ville'] ?></td>
            
            
        </tr>
    </tbody>
</table>













<?php
require_once 'inc/bas.inc.php';