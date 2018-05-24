<?php
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