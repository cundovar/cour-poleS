<?php

//Ici le but était de créer les classes et de bien séparer leur rôle
/**
 * Cette classe s'occupe de connaitre du total de la commande
 */
class Commande {
   private array $lignesPlat;

   public function __construct(array $lignesPlat){
        $this->lignesPlat = $lignesPlat;
   } 

   public function afficherLignes(){
        foreach($this->lignesPlat as $lignePlat){
            $lignePlat->printLine();
        }
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
        echo "Ref : ".$this->description->getCode() . ", Quantité: ".$this->quantite.", Sous-total: ".$this->sousTotal()."\n";
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
//Carte
$entrecote = new DescriptionPlat(22.99,"DEXXX Entrecote");
$poisson = new DescriptionPlat(19.20,"1Z334E Poisson");
$salade = new DescriptionPlat(13.99,"23444 Salade");

//Entrée de ma commande
$ligneEntrecote = new LignePlat(2,$entrecote);
$lignePoisson = new LignePlat(1,$poisson);
$ligneSalade = new LignePlat(4,$salade);

//Ma commande
$commande = new Commande(array($ligneEntrecote, $lignePoisson,$ligneSalade));
$commande->afficherLignes();
echo "Total de la commande :" . $commande->total() ."\n";