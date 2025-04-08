<?php
// Paramètres de connexion à la base de données
$host = 'localhost'; // Ton hôte de base de données
$dbname = 'blogdb';  // Nom de ta base de données
$username = 'root';  // Nom d'utilisateur de la base de données
$password = '';      // Mot de passe de la base de données

// DSN (Data Source Name)

// Options pour PDO
$options = [
    // Gestion des erreurs avec exceptions
    // Mode de récupération par défaut: tableau associatif
    // Désactiver l'émulation des requêtes préparées
];

try {
    // Création de l'instance PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // À ce stade, la connexion est établie
    echo "Connexion à la base de données réussie !<br><br>";
}catch (Exception $e) {
    // Code pour gérer l'exception
    echo "Une erreur est survenue : " . $e->getMessage();
}

echo "Nouvel utilisateur inséré avec l'ID: " . $pdo->lastInsertId() . "<br>";
