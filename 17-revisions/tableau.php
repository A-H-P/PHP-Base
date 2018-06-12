<?php
setlocale (LC_TIME, 'fr','fr_FR','fr_FR@euro','fr_FR.utf8','fr-FR','fra');
date_default_timezone_set("Europe/Paris");

$bdaug = utf8_encode(strftime( '%d %B %G' , -854841600)); 
$bdalg = utf8_encode(strftime( '%d %B %G' , -99878400));
$bdarm = utf8_encode(strftime( '%d %B %G' , -518400000));
$bdzac = utf8_encode(strftime( '%d %B %G' , 636076800));
$bdaub = utf8_encode(strftime( '%d %B %G' , 406080000));

$people = [
        [
    'prenom' => 'Auguste',
    'nom' => 'Fréchette',
    'date' => $bdaug,
    'zip' => '92190',
    'ville' => 'MEUDON',
    'phone' => '01 22 88 26 88'
        ],
        [
    'prenom' => 'Algernon',
    'nom' => 'Duranseau',
    'date' => $bdalg,
    'zip' => '91190',
    'ville' => 'GIT-SUR-YVETTE',
    'phone' => '01 80 31 88 75'
        ],
        [
    'prenom' => 'Armand',
    'nom' => 'Duplessis',
    'date' => $bdarm,
    'zip' => '99380',
    'ville' => 'COMBS-LA-VILLE',
    'phone' => '01 07 46 25 64'
        ],
        [
    'prenom' => 'Zacharie',
    'nom' => 'Lagrande',
    'date' => $bdzac,
    'zip' => '80090',
    'ville' => 'AMIENS',
    'phone' => '03 02 52 82 94'
        ],
        [
    'prenom' => 'Aubrey',
    'nom' => 'Bourassa',
    'date' => $bdaub,
    'zip' => '33800',
    'ville' => 'BORDEAUX',
    'phone' => '05 55 59 61 44'
        ],
    ];
// Calcul de la différence entre 2 dates
$dateToday = time(); // Timestamp du jour (nombre de secondes depuis le 1er janvier 1970)
$dateBirthday = strtotime('18 novembre 1991'); // Timestamp d'une date
echo ($dateBirthday - $dateToday) / (365 * 24 * 60 * 60);

// Alternative pour calculer la différence
$dateToday = new DateTime(); // Génère un objet DateTime
$dateBirthday = new DateTime('18 november 1991');
echo $dateBirthday->format('l d/m/Y'); // Formater un objet DateTime
echo $dateBirthday->modify('+1 year')->format('l d/m/Y'); // On peut modifier une date par rapport à un intervalle
var_dump($dateBirthday->diff($dateToday));
echo $dateBirthday->diff($dateToday)->y; // On récupère uniquement l'année

foreach($people as $person) {

        echo $person['prenom'] . ' ' . $person['nom'] . ' est né le ' . $person['date'] . ', il a 75 ans. ' . 'Il habite à ' . $person['ville'] . ' ' . '('. $person['zip'] . ').' . ' Il est joignable au ' . $person['phone'] ;
        echo '<br/>'; 
    }