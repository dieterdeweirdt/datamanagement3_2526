<?php
    //inladen van de data uit een extern bestand
    include_once 'includes/data.php';

    /* In development gebruiken we var_dump en print_r om te debuggen
     * var_dump geeft meer info, print_r is netter
     * 
     * var_dump($colors);
     * print_r($colors);
     * 
     * Met die() of exit stoppen we het script en gaan we niet verder
     * 
     * die();
     */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Colors</h1>

    <?php
    //Loop door de array met kleuren
    for($i = 0; $i < count($colors) ; $i++ ){
        /* //Manier 1: met een template string
        echo '<div 
                style="background-color: ' . $colors[$i] . '">
                    Dit is de kleur ' . $colors[$i] . '
            </div>';
        */
        //Manier 2: met een apart bestand
        include 'views/color.php';
    }
    ?>

    <footer>
        Dit is de footer
    </footer>
    
</body>
</html>