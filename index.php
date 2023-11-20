<?php

$article = ["132"=>"Schuhen", "1768"=>"Jacken", "1987"=>"Hosen"];


$bewertungen = array(
    "Max" => array(90, 80, 70),
    "Moritz" => array(90, 80, 70),
    "Peter" => array(90, 80, 70),
);

//Durschnitt berechnen von den Bewertungen
$averageOne = 0;
$averageTwo = 0;
$averageThree = 0;


//build me a for loop
foreach ($bewertungen as $b => $values) {
    //return the average of the array
    $averageOne += $values[0];
    $averageTwo += $values[1];
    $averageThree += $values[2];
};

$averageOne = $averageOne / count($bewertungen);
$averageTwo = $averageTwo / count($bewertungen);
$averageThree = $averageThree / count($bewertungen);

//

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Lurati</title>
</head>
<body>
    <p>
        <?php
    
        //return a text element which return the value of schuhe
        echo $article["132"];

        ?>
    </p>

    <h3>Average</h3>
    <ul>
        <?php
    
        //For Each loop in the php block to return the average of the array
        echo "<li>$averageOne</li>";
        echo "<li>$averageTwo</li>";
        echo "<li>$averageThree</li>";
    
        ?>
    </ul>
    
</body>
</html>