<?php

$quinze = 15;
$cinq = 5;
$huit = 8;

$resultat1 = $nombre1 + $nombre2 + $nombre3; // 15 + 5 + 8
$resultat2 = $nombre1 * ($nombre2 - $nombre3);
if ($nombre1 > 0) { // On vérifie que le nombre1 est supérieur à 0 pour la division
    $resultat3 = ($nombre3 - $nombre2) / $nombre1;
} else {
    // dire('Bonjour'); // Arrête le script PHP
    $resultat3 = 'Division par 0 impossible';
}

$quinze = 15;
$cinq = 5;
$huit = 8;

$vingthuit = $quinze + $cinq + $huit;
$moinsquarantecinq = $quinze * ($cinq - $huit);
$zerodeux = ($huit - $cinq) / $quinze;

echo "$quinze + $cinq + $huit" . "=" . " " . "$vingthuit" . "<br />";
echo "$quinze * ($cinq - $huit)"   . "=" . " " . "$moinsquarantecinq" . "<br />"; 
echo "($huit - $cinq) / $quinze"   . "=" . " " . "$zerodeux" . "<br />"; 

if ($vingthuit < 20 || $moinsquarantecinq < 20 || $zerodeux < 20){
    echo "Une des opérations renvoie un résultat inférieur à 20.";
}