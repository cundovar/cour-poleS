<?php
/**
 * Stockage de données des personnes
 */
class Personne {
    private $nom;
    private $prenom;
    private $adresse;
    private $numTel;
    private $mail;

    public function __construct($nom,$prenom,$adresse,$numTel, $mail) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->numTel = $numTel;
        $this->mail = $mail;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }

    public function getNumTel(){
        return $this->numTel;
    }

    
    public function setNumTel($numTel){
        $this->numTel = $numTel;
    }
    

    public function getMail(){
        return $this->mail;
    }

    public function setMail($mail){
        $this->mail = $mail;
    }

    public function toString(){
       return  $this->getNom(). " " . $this->getPrenom() .",addr: ". $this->getAdresse().", Tel: ".$this->getNumTel().", Mail:" .  $this->getMail() ."\n";
    }
}
/**
 * Controle une liste de personne
 */
class CarnetAdresse {
    private $personnes = array();

    public function ajouterPersonne($p){
        array_push($this->personnes,$p);
    }

    public function afficherPersonnes() {
        foreach($this->personnes as $personne){
            echo $personne->toString();
        }
    }

    public function repertorierNomPersonnes() {
        $noms = array();
        foreach($this->personnes as $personne){
            array_push($noms,$personne->getNom()); 
        }
        return $noms;
    }
}



class Informticien extends Personne{

}

class Footbolleur extends Personne{
    private $club;
    private $poste;

    public function getClub(){
        return $this->club;
    }
    public function setClub($club){
        $this->club = $club;
    }

    public function getPoste(){
        return $this->poste;
    }
    public function setPoste($poste){
        $this->poste = $poste;
    }



}

$personne1 = new Personne("Dupon","Maurice","43 av du pre","0293004993","dupon.maurice@dm.com");
$personne2 = new Personne("Duran","Marcel","72 rue du renard","0333004553","duran.marcel@dma.com");
$personne3 = new Personne("Toto","Tata","69 av du grand cedre","033002393","toto.tata@tt.com");
$personne3 = new Footbolleur("Tot","Tat","9 av du grand cedre","03302393","too.tata@tt.com");
$personne3 = new Informticien("Tot","Tat","9 av d cedre","02393","to.t@tt.com");

$carnetAdresse= new CarnetAdresse();
$carnetAdresse->ajouterPersonne($personne1);
$carnetAdresse->ajouterPersonne($personne2);
$carnetAdresse->ajouterPersonne($personne3);
$carnetAdresse->afficherPersonnes();
print_r($carnetAdresse->repertorierNomPersonnes());