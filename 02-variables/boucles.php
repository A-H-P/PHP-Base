<?php

echo "<h2>Ecrire une boucle qui affiche les nombres de 10 à 1.</h2>"

for ($i = 10; $i > 0; $i--) {
    echo "$i " . " ";
}
    echo "<br/>";
echo "<h2>Ecrire une boucle qui affiche uniquement les nombres pairs</h2>"
for ($i = 0; $i <= 100; $i+=2) {
    echo "$i" . " ";
}
/* 
if($i % 2 == 0) {
echo $i . ' - ';    
}
*/

echo "Ecrire le code permettant de trouver le PGCD de 2 nombres"
$nombre1 = 845;
$nombre2 = 312;
$reste = null;

// Tant que le reste est strictement différent 0
// nombrePlusGrand % nombrePlusPetit
845 % 312 = 221;
312 % 221 = 91;
221 % 91 = 39;
91 % 39 = 13;
39 % 13 = 0;

?>