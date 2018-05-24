<?php

/*
1. Ecrire une boucle qui affiche les nombres de 10 à 1
2. Ecrire une boucle qui affiche uniquement les nombres pairs entre 1 et 100
3. Ecrire le code permettant de trouver le PGCD de 2 nombres
4. Coder le jeu du FizzBuzz
    Parcourir les nombres de 0 à 100
    Quand le nombre est un multiple de 3, afficher Fizz.
    Quand le nombre est un multiple de 5, afficher Buzz.
    Quand le nombre est un multiple de 15, afficher FizzBuzz.
    Sinon, afficher le nombre
*/

echo "<h2>Ecrire une boucle qui affiche les nombres de 10 à 1</h2>";
for ($i = 10; $i > 0; $i--) {
    echo $i . ' - ';
}

echo "<h2>Ecrire une boucle qui affiche uniquement les nombres pairs entre 1 et 100</h2>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . ' - ';
    }
}

echo "3. Ecrire le code permettant de trouver le PGCD de 2 nombres";
$nombre1 = 845;
$nombre2 = 312;
$reste = null;
$resultat = null;

// Le var_dump peut nous aider à comprendre le résultat d'une comparaison.
var_dump(null !== 0);

echo 'Le PGDD de ' . $nombre1 . ' et ' . $nombre2 . ' est : ';
// Tant que le reste est strictement différent de 0
// nombrePlusGrand % nombrePlusPetit
// 845 % 312 = 221;
// 312 % 221 = 91;
// 221 % 91 = 39;
// 91 % 39 = 13;
// 39 % 13 = 0;

$dividende = $nombre1;
$diviseur = $nombre2;
while ($reste != 0) {
    $pgcd = $diviseur; // Le PGCD potentiel
    $reste = $dividende % $diviseur; // 845 % 312 = 221;
    $dividende = $diviseur; // 845 devient 312
    $diviseur = $reste; // 312 devient 221 (312 % 221 = 91)

    if ($reste == 0) {
        echo $pgcd;
    }
}
echo "<br/>";
echo "<h1>4. Coder le jeu du fizzbuzz</h1>";
for ($i = 0; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo 'Fizz, ';
    } else if ($i % 5 == 0) {
        echo 'Buzz, ';
    } else if ($i % 15 == 0) {
        echo 'FizzBuzz, ';
    }else {
        echo $i . ', ';
    }
}
echo "<br/>";
echo "<h1>5. Bières</h1>";
for ($i = 0; $i <= 10; $i++){
    for ($j = $i+1; $j <= 10; $j++) {
    echo '🍺';
    }
    echo '<br />';
} 


echo "<h1>5.2 Cacas</h1>";
for ($i = 0; $i < 10; $i++){ // Affiche chaque ligne
    for ($j = 0; $j < $i; $j++) { // Affiche chaque colonne
    echo '💩';
    }
    echo '<br />';
} 

$start = 5;
$size = 1; // le nombre d'étoiles pleines à afficher
echo "<h1>5.3 Triangle Equilatéral</h1>";

for ($i = 0; $i < 6; $i++){ // Affiche chaque ligne
        for($j = 0; $j < 11; $j++){
        if ($j == $start) { // On met une étoile pleine à une position spécifique
           for($a = 0; $a < $size; $a++) { 
            echo '💩';
           }
           $j += $size - 1; // Pour éviter que les étoiles débordent du cadre
        } else{
            echo '🍺';
        }
    }
    $start-- ; // On décrémente la variable à la fin de chaque ligne d'étoiles.
    $size += 2 ; // On augmente le nombre d'étoiles pleines à afficher entre chaque ligne.
    echo '<br />';
}
echo '<br />';
echo "<h1>6. Tables de multiplication</h1>";

for ($i = 0; $i <= 11; $i++){
    for($j = 0; $j <11)
}
