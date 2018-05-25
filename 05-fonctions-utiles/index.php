<?php

// Fonctions utiles en PHP

$a = 10;
var_dump(isset($a));
if (isset($a)) {
    echo $a;
}

/*
Renvoie le timestamp actuel (nombre de secondes depuis 1970)
*/
$t = time();
var_dump($t);

// On peut afficher la date formatée
echo date('d/m/Y');
echo '<br />';

echo date('c'); /* Affiche la date au format ISO 8601
2018-05-24T16:37:51+02:00 */

// Date d'anniversaire
$t = strtotime('16 juillet 1992');
echo date('l d/m/Y', $t);
echo '<br />';

echo date('l d F Y, \i\l \e\s\t H\hi \e\t s \s\e\c\o\n\d\e\s');
echo '<br />'
