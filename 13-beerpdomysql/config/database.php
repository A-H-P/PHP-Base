<?php
// Une constante en PHP est une variable est une variable qui ne varie pas
// Les constantes sont en majuscules par conventions
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'beer_pdo');

// Connexion à la BDD
try { // Essaye le code
$db = new PDO('mysql:host=localhost;dbname=beer_pdo;charset=utf8', 'root', '', [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);
} catch (Exception $e) { // Si le code renvoie une erreur, fais quelque chose
 echo $e->getMessage(); // On récupère le message de l'exception
// On peut ouvrir un nouvel onglet qui effectue une recherche sur Google avec l'erreur qu'on a obtenu
// echo '<script>window.open("http://www.google.fr/search?q='.$e->getMessage().'"); </script>';
echo '<img src="img/psyduck.gif" />';
}