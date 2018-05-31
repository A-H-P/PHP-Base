<<<<<<< HEAD
<?php

// mysql, host localhost, dbname movie_catalog, user root, pass ''

// On crée une connexion à la BDD
$db = new PDO('mysql:host=localhost;dbname=movie_catalog;charset=UTF8', 'root', '', [
    // On récupère tous les résultats en tableau associatif
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
var_dump($db);

// On crée une requête pour récupérer tous les films
$query = $db->query('SELECT * FROM movie');
var_dump($query);

// Pour récupérer un seul résultat
/* $movie = $query->fetch();
var_dump($movie); */

// Pour récupérer tous les résultats
$movies = $query->fetchAll();
// var_dump($movies);

// Parcourir la liste des films et afficher leur titre dans une liste
// Le echo pour s'aider sur la requête
echo 'SELECT * FROM movie WHERE id = ' . $id);
$id = $_GET['id']; // Je récupère l'id dans l'url

$db->query('SELECT * FROM movie WHERE id = 43);

$movie = $query->fetch();
var_dump($movie);
=======
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
ééééé
<?php
// mysql, host localhost, dbname movie_catalog, user root, pass ''

// On crée une connexion à la BDD
$db = new PDO('mysql:host=localhost;dbname=movie_catalog;charset=UTF8', 'root', '', [
    // On récupère tous les résultats en tableau associatif
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
var_dump($db);

// On crée une requête pour récupérer tous les films
$query = $db->query('SELECT * FROM movie');
var_dump($query);

// Pour récupérer un seul résultat
/*$movie = $query->fetch();
var_dump($movie);*/

// Pour récupérer tous les résultats
$movies = $query->fetchAll();
// var_dump($movies);

// Parcourir la liste des films et afficher leur titre dans une liste
echo '<ul>';
foreach ($movies as $movie) {
    echo '<li>' . $movie['name'] . ', ' . $movie['date'] . '</li>';
}
echo '</ul>';
?>
</body>
</html>
>>>>>>> upstream/master
