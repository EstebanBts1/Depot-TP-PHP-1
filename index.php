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
        echo "Marque : $this->marque, Modèle : $this->modele, Année : $this->annee";
    }
    
    public function demarrer() {
        echo "Le véhicule démarre.";
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
        echo parent::getInfos() . ", Portes : $this->nombrePortes, Carburant : $this->typeCarburant,<br>";
    }
    
    // Méthode spécifique
    public function klaxonner() {
        echo "La voiture klaxonne : TCHOU TCHOU!,<br>";
    }
}

// Classe enfant qui hérite de Vehicule
class Moto extends Vehicule {
    private $cylindre;
    
    public function __construct($marque, $modele, $annee, $cylindre) {
        parent::__construct($marque, $modele, $annee); // Appel du constructeur parent        
        $this->cylindre = $cylindre;
        // Initialisation des propriétés spécifiques
    }
    public function getInfos() {
        echo parent::getInfos() . ", Cylindre : $this->cylindre,<br>";
    }
    public function faireRoueArriere() {
        echo "La moto fait une roue arrière !","<br>";
    }
}

// Utilisation des classes
$voiture = new Voiture("Renault", "Clio", 2020, 5, "Essence");
$voiture->getInfos();
$voiture->klaxonner();

$moto = new Moto("Yamaha", "MT-07", 2021, 689);
$moto->getInfos();
$moto->faireRoueArriere();