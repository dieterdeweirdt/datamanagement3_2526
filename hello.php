<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Dit is commentaar
        
        /* Dit is een blok commentaar
        if(isset($_GET['name'])){
            $name = $_GET['name'];
        } else {
            $name = 'stranger';
        }
        */

        //Variabele ophalen uit de GET array, als die niet bestaat, gebruik 'stranger'
        $name = $_GET['name'] ?? 'stranger';

        //print het resultaat in een h1, met dubbele aanhalingstekens zodat de variabele geïnterpreteerd wordt
        echo "<h1>Hello $name</h1>"; 
    ?>

    <h2>Hello <?= $name?> </h2>

    <form method="GET">
        <label>
            Who are you?
            <input type="text" name="name" placeholder="Your name">
        </label>
        <button type="submit">Submit</button>
    </form>


    

</body>
</html>