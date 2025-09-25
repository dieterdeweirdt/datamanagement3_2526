<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //id ophalen uit de url
    $current_movie_id = $_GET['id'] ?? 0;

    //Connectie met db
    $host = 'db';
    $port = 3306;
    $user = 'db';
    $pass = 'db';
    $db = 'db';
    $conn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($conn, $user, $pass);

    //parameters vervangen door een vraagteken
    $statement = $pdo->prepare("SELECT * FROM movies WHERE movie_id = ?");
    //SQL injection tegen gaan via execute parameters
    $statement->execute(
        [
            $current_movie_id
        ]
    );

    //var_dump($statement);

    //1 movie ophalen
    $movie = $statement->fetchObject();

    //var_dump($movie);

    ?>

    <h1><?= $movie->title; ?></h1>
    <?= $movie->description; ?>

</body>
</html>