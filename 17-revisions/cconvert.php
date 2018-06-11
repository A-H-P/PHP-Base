<?php

function degree($temperature, $target = 'F') {
    $from = 'C'; // Par défaut, on fait C vers F
    $result = $temperature * 1.8 + 32;
    $temperatureCondition = $temperature;

    // Si on veut faire F vers C
    if ('C' == $target) { // Yoda condition
        $from = 'F'; // Si on choisit la cible C, on fait F vers C
        $result = ($temperature)

    }
}

echo degree(27, 'F'); // Affiche "Il fait trop chaud. 27°c équivaut à 80.6°F."
echo degree (41, 'C'); // Affiche "C'est le noooord. 41°F équivaut à 5°c."