// Créer un formulaire sur calculator
// Dans ce formulaire, créer un champ nombre 1 et un champ nombre 2
// Au clic sur le bouton calculer, faire la somme du nombre1 et du nombre 2
// Ajouter un champ radio ou select permettant de choisir l'opération + - / *
<br>
<br>
<form method="POST">

    <label for="nombre1">Nombre 1</label>
    <input type="text" id="nombre1"><br>
    <br>
    <label for="nombre2">Nombre 2</label>
    <input type="text" id="nombre2"><br>
    <br>
    <label for="addition">+</label>
    <input type="radio" name="operator" id="addition" value="+">
    <label for="substraction">-</label>
    <input type="radio" name="operator" id="substraction" value="-">
    <label for="division">/</label>
    <input type="radio" name="operator" id="division" value="/">
    <label for="multiplication">x</label>
    <input type="radio" name="operator" id="multiplication" value="*">

    <button>Calculer</button>

</form>

<?php

if (!empty($_POST)) { // Savoir si le formulaire a été soumis
    $operator = $_POST['operator'];
    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    $resultat = 0;

// Si nombre1 et nombre2 ne sont pas des nombres valides.
    if (!is_numeric($nombre1) || !is_numeric($nombre2)) {
        echo 'Les nombres saisis ne sont pas valides.';
        exit(); // On arrête le script
    }
// Si le nombre2 est égal à zéro, on ne peut pas faire le calcul
if ($nombre2 == 0 && $operator == '/') {
    echo 'Attention, division par zéro.';
    exit();
}

    switch ($operator) {
        case '+':
            $resultat = $nombre1 + $nombre2;
        break;
        case '-':
            $resultat = $nombre1 - $nombre2;
        break;
        case '/':
            $resultat = $nombre1 / $nombre2;
        break;
        case '*':
            $resultat = $nombre1 * $nombre2;
        break;
    }

    echo $resultat;
}    
var_dump($_POST);