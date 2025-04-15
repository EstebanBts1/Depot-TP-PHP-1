<?php
// Classe parente
class Vehicule {
    protected $marque;
    protected $modele;
    protected $annee;
    
    public function __construct($marque, $modele, $annee) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
    }
    
    public function getInfos() {
        return "Marque : $this->marque, Modèle : $this->modele, Année : $this->annee";
    }
    
    public function demarrer() {
        return "Le véhicule démarre.";
    }
}

// Classe enfant qui hérite de Vehicule
class Voiture extends Vehicule {
    private $nombrePortes;
    private $typeCarburant;
    
    public function __construct($marque, $modele, $annee, $nombrePortes, $typeCarburant) {
        parent::__construct($marque, $modele, $annee); // Appel du constructeur parent        
        $this->nombrePortes = $nombrePortes;
        $this->typeCarburant = $typeCarburant;
        // Initialisation des propriétés spécifiques
        
    }
    
    // Surcharge de la méthode getInfos()
    public function getInfos() {
        return parent::getInfos() . ", Portes : $this->nombrePortes, Carburant : $this->typeCarburant";
    }
    
    // Méthode spécifique
    public function klaxonner() {
        return "La voiture klaxonne : TCHOU TCHOU!";
    }
}

// Classe enfant qui hérite de Vehicule
class Moto extends Vehicule {
    private $cylindree;
    

}

// Utilisation des classes
$voiture = new Voiture("Renault", "Clio", 2020, 5, "Essence");

