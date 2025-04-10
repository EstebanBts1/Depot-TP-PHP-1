<?php
// Définition d'une classe Personne
class Personne {
    // Propriétés (attributs)
    private $nom;
    private $prenom;
    private $age;
    
    // Constructeur
    public function __construct($nom, $prenom, $age) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    // Getters (accesseurs)
    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getAge() {
        return $this->age;
    }

    // Setters (mutateurs)
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setAge($age) {
        $this->age = $age;
    }
}

// Modification des propriétés via les setters
$personne1->setAge(16);
$personne1->sePresenter();
$personne1->estMajeur();
?>