<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice foreach</title>
</head>
<body>
    <p>Exercice 1 (Itérer sur un tableau simple)<p>
    <?php
        $fruits = ["pomme", "banane", "orange", "fraise", "kiwi"];
        foreach ($fruits as $fruit){
            echo $fruit . "<br>";
        }
    ?>
    <p>Exercice 2 (Itérer sur un tableau associatif)<p>
    <?php
        $personne = [
            "nom" => "Dupont",
            "prenom" => "Jean",
            "age" => 30,
            "ville" => "Paris"
        ];

        foreach ($personne as $key => $value) {
            echo "$key: $value<br>";
            }
    ?>
    <p>Exercice 3 (Itérer sur un tableau multidimensionnel)<p>
    <?php
        $etudiants = [
            ["nom" => "Martin", "note" => 15],
            ["nom" => "Durand", "note" => 12],
            ["nom" => "Petit", "note" => 18]
        ];

        foreach ($etudiants as $etudiant) {
        echo $etudiant["nom"]," ", $etudiant["note"],"<br>";

        }
        
    ?>
</body>
</html>