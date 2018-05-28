<<<<<<< HEAD
<?php

$eleves = [
    0 => [
        'nom' => 'Adri',
        'notes' => [18, 19, 18, 20, 17, 16, 15, 20]
    ],
    1 => [
        'nom' => 'Thomas',
        'notes' => [4, 11, 12, 11, 13, 7]
    ],
    2 => [
        'nom' => 'Holly',
        'notes' => [20, 20, 20, 20, 20, 20, 20]
    ],
    3 => [
        'nom' => 'Kendji',
        'notes' => [10, 8, 8, 0, 9, 6, 1, 2]
    ]

];

 echo "<h1>Afficher la liste de tous les élèves avec leurs notes</h1>";

foreach ($eleves as $eleve) {
        echo $eleve['nom'] . ' a eu ';
foreach ($eleve['notes'] as $key => $note) {
        echo $note;
        // Si la note est en avant dernière, on affiche un "et"
        if ($key == count($eleve['notes']) - 2) {
            echo ' et ';
        // Si la note est en dernière, on affiche rien
        } else if ($key == count($eleve['notes']) - 1) {
            echo '';
        } else {
            echo ', ';
        }
    }
    echo '<br/>';
};

echo "<h1>Calculer la moyenne d'Holly.</h1>";
echo "On part de $ élèves[2]['notes']'. La fonction count permet de compter les éléments d'un tableau <br/>";

$notesDeHolly = $eleves[2]['notes'];

$totalNotes = 0;
foreach ($notesDeHolly as $note) {
    $totalNotes += $note;
}
// $totalNotes = array_sum($notesDeHolly);
$moyenne = $totalNotes / count($notesDeHolly);
$moyenne = round($moyenne, 2);
echo 'La moyenne de Holly est ' . $moyenne . ' sur 20<br/>';
var_dump($note);
var_dump(array_sum($notesDeHolly));

echo "<h1>Combien d'élèves ont la moyenne?.</h1>";
$countAverage = 0;
foreach ($eleves as $eleve) {
    $moyenne = array_sum($eleve['notes']) / count($eleve['notes']);
    $moyenne = round($moyenne, 2);
    if ($moyenne >= 10) {
        $countAverage++;
        echo $eleve['nom'] . ' a la moyenne<br/>';
    } else {
    echo $eleve['nom'] . ' n\'a pas la moyenne<br/>';
    }
}

echo 'Nombre d\'élèves avec la moyenne : ' . $countAverage . '<br/>';

echo "<h1>Quel élève à la meilleure note?</h1>";
$noteMax = 0;
foreach ($eleves as $eleve) {
    foreach ($eleve['notes'] as $note) {
        if ($note > $noteMax) {
            $noteMax = $note;
        }
    }
}
var_dump($noteMax);
foreach ($eleves as $eleve) {
    foreach ($eleve['notes'] as $note) {
        // Si l'élève a dans sa liste de notes, la meilleure note
        if ($note === $noteMax) {
            echo $eleve['nom'] . ' a la meilleure note : ' . $noteMax . '<br/>';
            break; // Arrête la boucle quand l'élève a au moins une fois la meilleure note
        }
    }
}

/*Qui a eu au moins un 20?
Personne n'a eu 20
quelqu'un a eu 20*/

$noteToCheck = 20;
$noteIsCheck = false;
foreach ($eleves as $eleve) {
    foreach ($eleve['notes'] as $note) {
        if ($note === $noteToCheck) {
            $noteIsCheck = true;
            break 2; // Arrête les foreach
        } 
    }
    var_dump($eleve);
    }
if ($noteIsCheck) {
    echo 'Quelqu\'un a eu 20';
} else {
    echo 'Personne n\'a eu 20';
}

echo "<h1>BONUS! Tri à bulles.</h1>";

$notes = [4, 25, 1, 36, 24];
$i = 0;
$count = count($notes) - 1;
var_dump($notes);

while ($i < $count) { // On parcourt tout le tableau
    if ($notes[$i] > $notes[$i + 1]) { // Si la valeur suivante est supérieure à la valeur actuelle
        $tmp = $notes[$i]; // On stocke le 4
        $notes[$i] = $notes[$i + 1]; // On met le 25 à la place du 4
        $notes[$i + 1] = $tmp; // On met le 4 à la place du 25
        $i = 0;
    } else {
        $i++; // On incrémente le compteur seulement s'il n'y a pas d'échanges
    }
}
var_dump($notes);
?>
=======
<?php

$eleves = [
    0 => [
<<<<<<< HEAD
        'nom' => 'Adri',
        'notes' => [18, 19, 18, 20, 17, 16, 15, 20]
=======
        'nom' => 'Matthieu',
        'notes' => [20, 8, 16, 12, 17, 16, 15, 2]
>>>>>>> upstream/master
    ],
    1 => [
        'nom' => 'Thomas',
        'notes' => [4, 11, 12, 11, 13, 7]
    ],
    2 => [
        'nom' => 'Holly',
        'notes' => [20, 20, 20, 20, 20, 20, 20]
    ],
    3 => [
<<<<<<< HEAD
        'nom' => 'Kendji',
        'notes' => [10, 8, 8, 0, 9, 6, 1, 2]
=======
        'nom' => 'Enzo',
        'notes' => [9, 14, 6, 10, 1, 8, 2]
>>>>>>> upstream/master
    ]

];

 echo "<h1>Afficher la liste de tous les élèves avec leurs notes</h1>";

foreach ($eleves as $eleve) {
        echo $eleve['nom'] . ' a eu ';
foreach ($eleve['notes'] as $key => $note) {
        echo $note;
        // Si la note est en avant dernière, on affiche un "et"
        if ($key == count($eleve['notes']) - 2) {
            echo ' et ';
        // Si la note est en dernière, on affiche rien
        } else if ($key == count($eleve['notes']) - 1) {
            echo '';
        } else {
            echo ', ';
        }
    }
    echo '<br/>';
};

echo "<h1>Calculer la moyenne d'Holly.</h1>";
echo "On part de $ élèves[2]['notes']'. La fonction count permet de compter les éléments d'un tableau <br/>";

$notesDeHolly = $eleves[2]['notes'];

$totalNotes = 0;
foreach ($notesDeHolly as $note) {
    $totalNotes += $note;
}
// $totalNotes = array_sum($notesDeHolly);
$moyenne = $totalNotes / count($notesDeHolly);
$moyenne = round($moyenne, 2);
echo 'La moyenne de Holly est ' . $moyenne . ' sur 20<br/>';
var_dump($note);
var_dump(array_sum($notesDeHolly));

echo "<h1>Combien d'élèves ont la moyenne?.</h1>";
$countAverage = 0;
foreach ($eleves as $eleve) {
    $moyenne = array_sum($eleve['notes']) / count($eleve['notes']);
    $moyenne = round($moyenne, 2);
    if ($moyenne >= 10) {
        $countAverage++;
        echo $eleve['nom'] . ' a la moyenne<br/>';
    } else {
    echo $eleve['nom'] . ' n\'a pas la moyenne<br/>';
    }
}

echo 'Nombre d\'élèves avec la moyenne : ' . $countAverage . '<br/>';

echo "<h1>Quel élève à la meilleure note?</h1>";
$noteMax = 0;
foreach ($eleves as $eleve) {
    foreach ($eleve['notes'] as $note) {
        if ($note > $noteMax) {
            $noteMax = $note;
        }
    }
}
var_dump($noteMax);
foreach ($eleves as $eleve) {
    foreach ($eleve['notes'] as $note) {
        // Si l'élève a dans sa liste de notes, la meilleure note
        if ($note === $noteMax) {
            echo $eleve['nom'] . ' a la meilleure note : ' . $noteMax . '<br/>';
            break; // Arrête la boucle quand l'élève a au moins une fois la meilleure note
        }
    }
}

<<<<<<< HEAD
/*Qui a eu au moins un 20?
Personne n'a eu 20
quelqu'un a eu 20*/
?>
=======
/* 5/ Qui a eu au moins un 20 ?
Exemple: Personne n'a eu 20
         Quelqu'un a eu 20 */
$noteToCheck = 20;
$noteIsCheck = false;
foreach ($eleves as $eleve) {
    foreach ($eleve['notes'] as $note) {
        if ($note === $noteToCheck) {
            $noteIsCheck = true;
            // break; // Arrête le foreach
            break 2; // Arrête les 2 foreach
        }
    }
    var_dump($eleve); // Ne s'affiche pas avec le break 2
}

if ($noteIsCheck) {
    echo 'Quelqu\'un a eu 20';
} else {
    echo 'Personne n\'a eu 20';
}

/* 6/ BONUS Tri à bulles 
*/

$notes = [4, 25, 1, 36, 24];
$i = 0;
$count = count($notes) - 1;
var_dump($notes);

while ($i < $count) { // On parcours tout le tableau
    if ($notes[$i] > $notes[$i + 1]) { // Si la valeur suivante est supérieur à la valeur actuelle
        $tmp = $notes[$i]; // On stocke le 4
        $notes[$i] = $notes[$i + 1]; // On mets le 25 à la place du 4
        $notes[$i + 1] = $tmp; // On mets le 4 à la place du 25
        $i = 0;
    } else {
        $i++; // On incrémente le compteur seulement s'il n'y a pas d'échanges
    }
}
var_dump($notes);
>>>>>>> upstream/master
>>>>>>> aee1c6436577f873c0b7ad5ccf92cf465aa9bc6e
