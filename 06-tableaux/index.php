<?php

$people = [
    'Jean',
    'Eric',
    'Jeanne'
];

echo $people; // Ne fonctionne pas
echo '<br />';

echo '<pre>';
print_r($people); // C'est mieux pour faire du debug
echo '</pre>';

var_dump($people); // Debug du tableau

echo $people[1]; // Affiche ERIIIIIC

echo '<br /> ----------------- FOREACH ----------------------------- <br/>';
//Afficher tous les prénoms du tableau
foreach ($people as $index => $person) {
    echo $index . ' : ' . $person . '<br/>';
}
echo '<br/> ----------------------- Fin du FOREACH -------------------- <br/>';

// Si un index est déclaré, les élément suivants vont être auto incrémentés par rapport à cet index
$people = [
    'Jean',
    3 => 'Eric',
    'Jeanne'
];

var_dump($people);

// Stocker des contacts dans ce tableau avec les index noms (string), prénoms (string), âge (int), téléphone (array => portable (string) et fixe (string)). 
// Il peut y avoir plusieurs contacts.

$people = 
    [
        [
        'nom' => 'Etchebest', 
        'prenom' => 'Philippe', 
        'age' => 51, 
        'telephone' => 
            [
            'portable' => '0645875496', 
            'fixe' => '(+33) 21450055'
            ],
        ],
    [
        [
        'nom' => 'Philippe', 
        'prenom' => 'Gerard', 
        'age' => 55, 
        'telephone' => 
            [
            'portable' => '0645145496', 
            'fixe' => '(+33) 21458055'
            ]
        ]
    ]
];

var_dump($people);

/* 
    Ecrire la boucle foreach qui affiche le texte ci-dessous : 
    Matthieu à 26 ans et est joignable au 06.00.00.00.00, (+33) 03 21 00 00 00
    Jean a 36 ans et est joignable au 07.00.00.00.00, (+33) 03 20 00 00 00
*/
foreach ($people as $index => $person) {
    echo $person['prenom'] . ' a ' . $person['age'] . ' ans et est joignable au ';
    echo $person['telephone']['portable'] . ' , ' . $person['telephone']['fixe'] . ' <br/> ';
// On peut aussi parcourir tous les téléphones avec un foreach
    foreach ($person['telephone'] as $type => $phone) {
        echo $type . ' : ' . $phone . ', ';
    }
    echo '<br/>';
}