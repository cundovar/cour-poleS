<?php

interface Observer {
    public  function actualise();
}

abstract class Sujet{
	private $observers=array();

	public function ajouterObserver(Observer $observer){
		array_push($this->observers,$observer);
	}
	
	protected function notifyAllObservers() {
		foreach ($this->observers as $observer) {
			$observer->actualise();
		}
	}
}

/**
 * Cette classe gere les notes et la moyenne de chaque Eleve
 * C'est un sujet du l'observation pour le calcul de la moyenne
 * à chaque fois qu'on lui attribuera une note
 */

class Eleve extends Sujet{
		
	private $notes = array();
	private float $moyenne = 0;
	
	public function __construct() {
		$this->notes = array();
	}
	
	public function ajouterNote(float $note) {
		array_push($this->notes,$note);        
		$this->notifyAllObservers();
	}
	
	public function setMoyenne(float $moyenne) {
		$this->moyenne = $moyenne;
	}
	
	public function getMoyenne() {
		return $this->moyenne;
	}
	
	public function getNotes() {
		return $this->notes;
	}
	
	
}

/** 
 * Cette classe récupère l'évenement d'ajout de note (lancée par la méthode ajouteNote de l'Eleve)
 *	Et recalcule la moyenne avec la nouvelle note
 */
class NotesObserver implements Observer{
	private $eleve;

	public function __construct(Eleve $eleve){
		$this->eleve = $eleve;
		$this->eleve->ajouterObserver($this);
	}
	
	public function actualise() {
		
		$moyenne = 0;
		$sommeNotes = 0;
		foreach($this->eleve->getNotes() as $note) {
			$sommeNotes += $note;
		}
		
		$moyenne = $sommeNotes / count($this->eleve->getNotes());
	
		$this->eleve->setMoyenne($moyenne);
	}
}

$eleve = new Eleve();		
new NotesObserver($eleve);
		
$eleve->ajouterNote(5.0);
echo $eleve->getMoyenne()."\n";

$eleve->ajouterNote(18.0);
echo $eleve->getMoyenne()."\n";

$eleve->ajouterNote(15.0);
echo $eleve->getMoyenne()."\n";
