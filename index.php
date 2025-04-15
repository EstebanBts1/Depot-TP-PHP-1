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
    public function sePresenter() {
        echo "Mon nom est ", $this->nom, " ", $this->prenom, " et j'ai ", $this->age, " ans.<br>";
    }
    public function estMajeur() {
        if ($this->age >= 18) {
            echo $this->prenom . " est majeur(e).<br>";
        } else {
            echo $this->prenom . " est mineur(e).<br>";
        }
    }
}

// Modification des propriétés via les setters
$personne1 = new Personne("Guillard","Lény",19);
//$personne1->setAge(20);
$personne1->sePresenter();
$personne1->estMajeur();
