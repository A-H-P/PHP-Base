<?php
// Inclure le fichier config/database.php 
// Inclure le fichier partials/header.php
require('partials/header.php'); 
// Récupérer la liste des bières
// Requête
$query = $db->query('SELECT * FROM beer');
// Résultat
$beers = $query->fetchAll();
?>

<!-- Le contenu de la page -->
<div class="container text-center pt-5">
    <h1>Nos bières</h1>
    <p></p>
    <div class="row">
        <?php
        // On affiche la liste des bières
        foreach ($beers as $beer) {
            echo '<div class="col-md-3">';
                echo '<div class="card mb-4">';
                    echo '<img class="beer-img d-block m-auto card-img-top" src="'.$beer['image'].'" />';
                    echo '<div class="card-body">';
                        echo $beer['name'];
                        // Ajouter un lien (a href) "voir la bière
                        // Quand on clique sur le lien, on doit se rendre sur la page beer_single.php
                        // Créer la page beer_single.php
                        // Il faudrait que l'url ressemble à beer_single.php?id=IDDELABIERE
                        echo '<a href="beer_single.php?id='.$beer['id'].'"class="btn btn-primary btn-block">Voir la bière</a>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        } ?>
    </div>
</div>

<?php

// Inclure le fichier partials/footer.php
require('partials/footer.php');

