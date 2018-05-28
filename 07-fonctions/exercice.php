<<<<<<< HEAD
1. Créer une fonction calculer le carré d'un nombre
2. Créer une fonction calculant l'aire d'un cercle
3. Créer une fonction calculant la TVA d'un prix. Nous aurons besoin de 2 paramètres, le prix HT et le taux.
4. Ajouter un 3ème paramètre à cette fonction permettant de l'utiliser dans les deux sens. (HT vers TTC ou TTC vers HT)
<?php
echo '<br/>';
function carre($carre1) {
    // $carre1 ** 2

return $carre1 * $carre1;
}
echo '<br/>';
echo 'Le carré est : ';
echo carre(4);

function rectaire($rect1, $rect2) {
    return $rect1 * $rect2;
}
echo '<br/>';
echo 'L\'aire du rectangle est :';
echo rectaire(5, 8);

function cerclaire($cercle) {
    return ($cercle * $cercle) * 3.14;
}
echo '<br/>';
echo 'L\'aire du cercle est : ';
echo cerclaire(10);

function tva($prix, $taux) {
    return ($prix * $taux) + $prix;
}
echo '<br/>';
echo 'Le prix TTC est de : ';
echo tva(10, 0.20);

function convert($price, $rate, $taxes = true) {
    if ($taxes) {
        return $price * (1 + $rate / 100); // la fonction s'arrête au return
    }

    return $price / (1 + $rate / 100);
}
echo '<br/>';
echo 'Le prix est de : ';

echo convert(10, 20);
echo '<br/>';
echo 'Le prix est de : ';
echo convert(11, 20, false);

echo '<br/>';
=======
<?php

// 1. Créer une fonction calculant le carré d'un nombre

function square($number) {
    // $number * $number;
    return $number ** 2;
}

echo square(5); // 25
echo '<br />';
echo square(10); // 100
echo '<br />';
echo square(7); // 49
echo '<br />';

// 2. Créer une fonction calculant l'aire d'un rectangle et une fonction pour celle d'un cercle

function rectArea($length, $width) {
    return $length * $width;
}

echo rectArea(10, 5); // 50
echo '<br />';

function circleArea($radius) {
    return $radius * $radius * M_PI;
}

echo circleArea(10); // 314.15
echo '<br />';

// 3. Créer une fonction calculant le prix TTC d'un prix HT. Nous aurons besoin de 2 paramètres, le prix HT et le taux.

function convertHtToTtc($price, $rate) {
    return $price * (1 + $rate / 100);
}

echo convertHtToTtc(10, 20);
echo '<br />';

// 4. Ajouter un 3ème paramètre à cette fonction permettant de l'utiliser dans les 2 sens (HT vers TTC ou TTC vers HT)

// False : TTC vers HT
// True : HT vers TTC
function convert($price, $rate, $taxes = true) {
    if ($taxes) {
        return $price * (1 + $rate / 100); // La fonction s'arrête au return
    }

    return $price / (1 + $rate / 100);
}

echo convert(10, 20);
echo '<br />';

echo convert(12, 20, false);
echo '<br />';

>>>>>>> aee1c6436577f873c0b7ad5ccf92cf465aa9bc6e
