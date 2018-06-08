<?php

// Vérifie que l'id et le token correspondent
if ((empty($_GET['id']) || empty($_GET['token'])) && !isValidToken($_GET['token'])) {
    echo 'Le token n\'est pas valide';
    exit(); // On arrête le script PHP
}

// Inclure le fichier config/database.php
// Inclure le fichier partials/header.php
require('partials/header.php'); ?>

<!-- Le contenu de la page -->
<div class="container pt-5">
    <h1>Redéfinir mon mot de passe</h1>
</div>

<?php
    if (!empty($_POST)) {

    }

?>
// Inclure le fichier partials/footer.php
require('partials/footer.php');