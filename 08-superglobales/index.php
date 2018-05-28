<?php

// Les superglobales
// On peut accéder aux données dans l'URL grâce à $_GET
var_dump($_GET);
//if (isset($_GET['id'])) {
// $id = $_GET['id']; // On peut récupérer un id dans l'URL
// if ($id == 5) {
//     echo 'Utilisateur 5';
// }
//}
// 1. Récupérer le paramètre name dans l'url (index.php?name=titi)
// 2. et l'afficher sur la page -> 'hello titi"
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    echo 'Hello' . $name;
}

// On a également accès à $_POST

var_dump($_POST);
?>
<form>
    <label for="age">Votre âge</label>
    <input type="text" id="age" placeholder="Votre âge" />
    <button>Envoyer</button>

<?php
// Créer un formulaire sur calculator
// Dans ce formulaire, créer un champ nombre 1 et un champ nombre 2
// Au clic sur le bouton calculer, faire la somme du nombre1 et du nombre 2
// Ajouter un champ radio ou select permettant de choisir l'opération + - / *