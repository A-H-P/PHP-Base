<?php
// Inclure le fichier config/database.php 
// Inclure le fichier partials/header.php
require('partials/header.php'); 

// Récupérer l'id de la bière dans l'URL
$id = $_GET['id'];
// Récupérer les informations de la bière
// Risque d'injection SQL
$query = $db->query('SELECT * FROM beer WHERE `name` = "'.$id.'"');
var_dump($query);
$beer = $query->fetch();
?>

<!-- Le contenu de la page -->
<div class="container pt-5">
    <h1><?php echo $id . ' : ' . $beer['name']; ?></h1>
    <div class="row">
        <div class="col-sm-6">
            <img class="img-fluid" src="<?php echo $beer['image']; ?>" alt="<?php echo $beer['name']; ?>">
        </div>
        <div class="col-md-6">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nom : <?php echo$beer['name']; ?> </li>
                <li class="list-group-item">Degrés : <?php echo$beer['degree']; ?> </li>
                <li class="list-group-item">Volume : <?php echo$beer['volume']; ?> </li>
                <li class="list-group-item">Prix : <?php echo$beer['price']; ?> </li>
                <li class="list-group-item">Marque : <?php echo$beer['brand_id']; ?> </li>
                <li class="list-group-item">Type : <?php echo$beer['ebc_id']; ?> </li>
                <?php // 4 => Blonde, 26 => Brune 39 => Ambrée 57 => Noire
                $type = null;
                switch ($ebc['code']) {
                    case 4:
                        $type = 'Blonde';
                    break;
                    case 26:
                        $type = 'Brune';
                    break;
                    case 39:
                        $type = 'Ambrée';
                    break;
                    case 57:
                        $type = 'Noire';
                    break;
                }
                ?>
                <span class="d-inline-block" style="background-color: #<?php echo $ebc['color']; ?>; width: 50px; height: 25px"></span>
            </ul>
        </div>
    </div>
</div>
<?php
// Inclure le fichier partials/footer.php
require('partials/footer.php');

