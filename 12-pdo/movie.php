<?php
// mysql, host localhost, dbname movie_catalog, user root, pass ''

// On crée une connexion à la BDD
$db = new PDO('mysql:host=localhost;dbname=movie_catalog;charset=UTF8', 'root', '', [
    // On récupère tous les résultats en tableau associatif
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

// Ecrire une requête qui récupère un film par son id
// L'id doit provenir de l'URL
// Exemple si je saisis movie.php?id=43, la requête doit récupérer le film qui a l'id 43

$_GET['id'];
$query = $db->query('SELECT * FROM movie WHERE id =  ');
var_dump($query);