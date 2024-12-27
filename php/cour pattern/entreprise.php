<?php

abstract class Employe {
    //Attributs
    protected $nom;
    protected $prenom;
    protected $matricule;

    //Méthodes
    public function __construct($nom, $prenom, 
                                $matricule){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->matricule = $matricule; 
    }
    
    public abstract function travailler();
    public abstract function rendreCompte();
  
    public function messageEmployer($message){
        echo $this->prenom . " " . $this->nom. " (Mat:".$this->matricule."): " .$message."\n";
    }

    public function getNomPrenom() {
        return $this->nom . " ".$this->prenom;
    }

    public function getMatricule() {
        return $this->nom . " ".$this->prenom;
    }

}

final class PDG extends Employe {

    //liste d'cd
    private $autresEmployes;

    public function __construct($nom, $prenom, $matricule, $autresEmployes){
        parent::__construct($nom, $prenom, $matricule);
        $this->autresEmployes = $autresEmployes;
    }

    public function travailler() {
      $this->messageEmployer("Je suis le patron,je vais voir ce que font les autres");
      foreach($this->autresEmployes as $employe) {
          echo "- ";
          $employe->rendreCompte();
      }
    }

    public function rendreCompte() {
       throw new Exception("Eh oh je suis le patron quand même un peu de respect!!!");
    }
}

final class Comptable extends Employe {
        
    private $nbrDossierATraiter;

    public function __construct($nom, $prenom, $matricule, $nbrDossierATraiter){
        parent::__construct($nom, $prenom, $matricule);
        $this->nbrDossierATraiter = $nbrDossierATraiter;
    }
    
    public function travailler() {
        if($this->nbrDossierATraiter > 0){
            $this->nbrDossierATraiter--; // équivaut à $this->nbrDossierATraiter = $this->nbrDossierATraiter - 1 ;
            $this->messageEmployer("Je travaille sur le dossier n° " . $this->nbrDossierATraiter);
        } else {
            $this->messageEmployer("J'ai fini mon travail"); 
        }
    }

    public function ajoutDossier(int $nbr){
        $this->nbrDossierATraiter += $nbr;
    }

    public function rendreCompte() {
        if($this->nbrDossierATraiter > 0){           
            $this->messageEmployer("Il me reste " . $this->nbrDossierATraiter ." à traiter" );
        } else {
            $this->messageEmployer("J'ai fini mon travail"); 
        }
    }
}


final class Developpeur extends Employe {

    private $cdc;

    public function __construct($nom, $prenom, $matricule, $cahierDesCharges){
        parent::__construct($nom, $prenom, $matricule); 
        $this->cdc = $cahierDesCharges;
    }
    
    public function travailler() {
       $this->messageEmployer("Je travaille sur le cahier des charges : " . $this->cdc);
    }

    public function rendreCompte() {
        $this->messageEmployer("Mon travail sur le CDC : " . $this->cdc ." avance bien" );
    }

    public function getCdc(){
        return $this->cdc;
    }

    public function setCdc($cdc){
        $this->cdc = $cdc;
    }
}

class Entreprise {

    public function restituerActivite(){
        $comptable = new Comptable("Duran","Marcel","0X3444",4);
        $developpeur = new Developpeur("Dupond","José","0X34993","Circuit systeme automobile");
        $PDG = new PDG("Delaville","Mathieu","0X00001",array($comptable,$developpeur));

        //Séquence de travail
        $comptable->travailler();
        $developpeur->travailler();
        $PDG->travailler();

        //Changement d'état
        $comptable->ajoutDossier(3);
        $developpeur->setCdc("Gestion de banque");
        $PDG->travailler();
    }
}
$entreprise = new Entreprise();
$entreprise->restituerActivite();







