<?php

include('a.php'); // Exécute le contenu du fichier A

// include('aa.php); // Si le fichier n'existe pas, affiche un warning mais le reste du code s'exécute.

include('a.php'); // Affiche le contenu du fichier a deux fois
include_once('a.php'); // Affiche le contenu du fichier a seulement s'il n'a pas encore été affiché

var_dump(__DIR__);
require(__DIR__.'/b.php'); // Si b.php n'existe pas, le reste du code ne se lance pas.
var_dump(__DIR__)
echo 'Reste du site';
