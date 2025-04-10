<?php

$host = "localhost";
$dbname = "Base-php";
$username = "root";
$password = "";
$charset = "utf8mb4";
// Paramètres de connexion à la base de données

// DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,    // Gestion des erreurs avec exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,   // Mode de récupération par défaut: tableau associatif
    PDO::ATTR_EMULATE_PREPARES => false // Désactiver l'émulation des requêtes préparées
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
    echo "Connexion à la base de données réussie ! </br></br>";

    print ("EXERCICE 1</br></br>");
    // Réinsertion de l'âge dans l'insertion
    $sql = "INSERT INTO utilisateurs (nom, age) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["Dupre", 35]);

    echo "Nouvel utilisateur inséré avec l'ID : " . $pdo->lastInsertId() . "</br></br>";

    print ("EXERCICE 2</br></br>");
    echo "Utilisateurs de plus de 30 ans :</br>";

    $sql = "SELECT * FROM utilisateurs WHERE age > 30";
    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll();

    foreach ($users as $user) {
        echo "Nom : " . $user['nom'] . " | Age : " . $user['age'] . "</br>";
    }

    echo "</br>";

    print ("EXERCICE 3</br></br>");
    // Mise à jour de l'âge de l'utilisateur
    $sql = "UPDATE utilisateurs SET age = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([40, 1]);

    echo "Nombre d'utilisateurs mis à jour : " . $stmt->rowCount() . "</br></br>";

    print ("EXERCICE 4</br></br>");
    $sql = "DELETE FROM utilisateurs WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([1]);

    echo "Nombre d'utilisateurs supprimés : " . $stmt->rowCount() . "</br></br>";

} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}