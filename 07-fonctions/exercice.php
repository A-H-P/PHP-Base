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