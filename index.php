<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo Boucle For</title>
</head>
<body>
    <p>Exercice 1  (Afficher les nombres de 1 à 10)<p>
    <?php
        for ($i = 1; $i <= 10; $i++) 
        {
            echo $i;
        }
    ?>

    <p>Exercice 2 (Calculer la somme des nombres de 1 à 100)<p>
    <?php
        $somme = 0;
        for ($j = 1; $j <= 100; $j++)
        {
            $somme+=$j;
        }
        echo $somme;
    ?>
    <p>Exercice 3 (Afficher une table de multiplication)<p>
    <?php
        $table = 7;
        $result = 0;
        for ($m=1; $m <= 10; $m++)
        {
           $result = $table * $m;
           echo $table," x ",$m," = ",$result,"<br>";
           
        }
    ?>
</body>
</html>