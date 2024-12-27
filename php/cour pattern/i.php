<?php

/**
 * Cette classe s'occupe de connaitre du total de la commande
 * Et de créer des lignes de plat
 */
class Commande {
   private $lignesPlat;

   public function __construct(){
        $this->lignesPlat = array();
   } 


   public function creerLignePlat($quantite, $description){
        array_push($this->lignesPlat, new LignePlat($quantite, $description));
   }

   public function afficherLignes(){
        $lignes = "";
        foreach($this->lignesPlat as $lignePlat){
            $lignes.=$lignePlat->printLine();
        }
        return $lignes;
   }

   public function total(){
        $total = 0.0;
        foreach($this->lignesPlat as $lignePlat){
            $total += $lignePlat->sousTotal();
        }
        return $total;
   }
}

/**
 * Cette classe s'occupe du connaitre le sous total concernant un plat par rapport à sa quantité
 */
class LignePlat {
    private $quantite;
    private $description;

    public function __construct($quantite,$description){
        $this->quantite=$quantite;
        $this->description=$description;
           
    }

    public function printLine (){
        return "Ref : ".$this->description->getCode() . ", Quantité: ".$this->quantite.", Sous-total: ".$this->sousTotal()."<br/>\n";
    }

    public function sousTotal(){
        return $this->description->getPrix() * $this->quantite;
    }
}

/**
 * Cette classe s'occupe de  connaitre le prix d'un plat
 */
class DescriptionPlat {
    private $prixUnitaire;
    private $code;

    public function __construct($prixUnitaire, $code){
        $this->code=$code;
        $this->prixUnitaire=$prixUnitaire;
    }

    public function getPrix(){
        return $this->prixUnitaire;
    }

    public function getCode(){
        return $this->code;
    }
}

//Menunew
$plats = array(
    "entrecote" => new DescriptionPlat(22.99,"Entrecote"),
    "poisson" => new DescriptionPlat(19.20,"Poisson"),
    "salade" => new DescriptionPlat(13.99,"Salade")
);

/**
 * Cette classe gère les interactions utilisateurs
 */
class Controleur {
    
    private $messageToDisplay = "";

    public function ajouterPlat(){
        global $plats;
        $quantity = $_POST["quantity"];
        $description = $plats[$_POST["plat"]];
        
        if(!isset($_SESSION["commande"])){
            $commande = new Commande();
        } else {
            $commande = $_SESSION["commande"];
        }

        $commande->creerLignePlat($quantity,$description);
        $this->messageToDisplay=$commande->afficherLignes();
        $_SESSION["commande"] = $commande;
    }

    public function calculerTotal(){
        $commande = $_SESSION["commande"];
        $this->messageToDisplay=$commande->afficherLignes();
        $this->messageToDisplay.="Total commande :". $commande->total()."<br/>\n";
        unset ($_SESSION["commande"]);
    }

    public function getMessage(){
        return $this->messageToDisplay;
    }
}

$controleur=new Controleur();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    $controllerMethod = $_POST["call"];
    $controleur->$controllerMethod();
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Restaurant</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/fontawesome.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- Leave those next 4 lines if you care about users using IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
        <h1>Restaurant</h1>
  <form action="#" method="POST">
    <div class="form-group">
            <label for="plats">Choisir un plat</label>
            <select class="form-control" name="plat" id="plats" required>
            <option value="" selected="selected" >--</option>    
            <?php foreach($plats as $keyValue => $plat) :?>
                <option value="<?=$keyValue?>"><?=$plat->getCode()?></option>
            <?php endforeach;?>
            </select>
        </div>
       <div class="form-group">
            <label for="quentity">Quantité</label>
            <input type="number" class="form-control" name="quantity" required="required" placeholder="Entrer la quantité" />
       </div>
       <div class="form-group">
            <input type="hidden" name="call" value="ajouterPlat" />
            <input class="btn btn-primary" type="submit" value="Ajouter plat" />
        </div>
    </form>
    <form action="#" method="POST">
        <input type="hidden" name="call" value="calculerTotal" />
        <input type="submit" value="Calculer le total" />
    </form>
    <?php if(!empty($controleur->getMessage())) :?>
        <div class="alert alert-primary" role="alert">
        <?=$controleur->getMessage()?>