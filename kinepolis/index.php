<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Movies</h1>

    <?php
    //Connectie met db
    $host = 'db';
    $port = 3306;
    $user = 'db';
    $pass = 'db';
    $db = 'db';
    $conn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($conn, $user, $pass);

    //query uitvoeren om alle movies op te halen
    $statement = $pdo->query('SELECT * FROM movies');
    //var_dump($statement);

    //alle movies ophalen in een array
    $movies = $statement->fetchAll();
    //print_r($movies);

    //Loop door de array met movies
    foreach($movies as $movie) {
        //echo $movie['title'];
        //include een apart bestand om 1 movie te tonen
        include 'partial/movie.php';
    }

    ?>

</body>
</html>