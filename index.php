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
</body>
</html>