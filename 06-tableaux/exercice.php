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
?>
