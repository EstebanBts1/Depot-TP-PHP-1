<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Exercice 1 (Afficher un message selon le jour de la semaine)</p>
    <?php
        $jour = date('l'); // Jour actuel de la semaine en anglais
            switch ($jour) {
                case "Monday":
                    $message = "OnEstLundi";
                    break;
                case "Tuesday":
                    $message = "OnEstMardi";
                    break;
                case "Wednesday":
                    $message = "OnEstMercredi";
                    break;
                case "Thursday":
                    $message = "OnEstJeudi";
                    break;
                case "Friday":
                    $message = "OnEstVendredi";
                    break;
                case "Saturday":
                    $message = "OnEstSamedi";
                    break;
                case "Sunday":
                    $message = "OnEstDimanche";
                    break;
            }
            echo "Aujourd'hui c'est " . $jour ." ".  $message .": " ."<br><br>";
    ?>
    <p>Exercice 2 (Notation par lettre selon la note)</p>
    <?php
    $note = 15;
        switch ($note) {
            case $note>=18:
                $Appreciation = "Excellent (A+)";
                break;
            case $note>=16:
                $Appreciation = "Très bien (A)";               
                break;
            case $note>=14:
                $Appreciation = "Bien";            
                break;
            case $note>=12:
                $Appreciation = "Assez bien";        
                break;
            case $note>=10:
                $Appreciation = "Passable";              
                break;
        }
        echo "Note: " . $note . "/20 - ".$Appreciation;

    ?>
    <H1>Exercice supplémentaire (implementer camarades)</H1>
    <?php

    $liste = array("Leny", "Mehdi", "Mathias", "Alex", "Esteban","Yannice");
    $camarade = $liste[array_rand($liste)]; //rajout pour que quand on actalise la page $liste change et le message change donc en fonction de la variable prise.

    switch ($camarade) {
        case "Leny":
            echo "Leny est la";
            break;
        case "Mehdi":
            echo 'Medhi est la';
            break;
        case "Mathias":
            echo 'Mathias est la';
            break;
        case "Alex":
            echo 'Alex est la';
            break;
        case "Esteban":
            echo 'Esteban est la';
            break;
        case "Yannice":
            echo 'Yannice est la';
            break;
        default:
            echo 'Tu n\'existe pas dans la liste';
            break;
    }
    ?>
</body>
</html>