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
    $camarade = $liste[array_rand($liste)];

    switch ($camarade) {
        case "Leny":
            echo "Lache solo leveling sayer (Leny)";
            break;
        case "Mehdi":
            echo "Mephiles the dark trop baka (Mehdi)";
            break;
        case "Mathias":
            echo "90 picomètres pas si mal (Mathias)";
            break;
        case "Alex":
            echo "Le mec cultivé la (Alex)";
            break;
        case "Esteban":
            echo "Pokequizz sah rien a ajouter (Esteban)";
            break;
        case "Yannice":
            echo "Roquette la tour du roi (Yannice)";
            break;
        default:
            echo "Tu n'es pas dans la liste (Inconnu)";
            break;
    }
    ?>
</body>
</html>