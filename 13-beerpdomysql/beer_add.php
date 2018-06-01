<?php
// Inclure le fichier config/database.php
// Inclure le fichier partials/header.php
require('partials/header.php'); ?>

<!-- Le contenu de la page -->
<div class="container pt-5">
    <h1>Ajouter une bière</h1>
<?php 
    // Détecter quand le formulaire est soumis
// On peut aussi utiliser $_SERVER
if(!empty($_POST)) {
    $name = $_POST['name']; //doit faire au moins 3 caractères
    $degree = $_POST['degree']; //doit faire entre 0 et 20
    $price = $_POST['price']; // doit faire entre 0.01 et 99.99
    $volum = $_POST['volum']; // doit faire 250, 330 ou 750
    $brand = $_POST['brand']; // La marque doit exister dans la BDD
    $type = $_POST['type']; // Le type doit exister dans la BDD

    // Raccourci avec l'interpolation de variables
    foreach ($_POST as $key => $field) {
        $$key = $field;
    }
}
?>
<form method="POST" action="">
    <?php
    $fields = ['name' => 'Nom', 'degree' => 'Degrés', 'price' => 'Prix']; // Les champs du formulaire à afficher 
    foreach ($fields as $field => $label) { ?>
    <div class="form-group">
        <label for="<?php echo $field; ?>"><?php echo $field; ?> :</label>
        <input type="text" name="<?php echo $field; ?>" id="<?php echo $field; ?>" class="form-control">
    </div>
    <?php } ?>

    <div class="form-group">
        <label for="volum">Volume :</label>
        <select class="form-control" id="volum" name="volum">
            <option hidden value="">Choisissez votre volume</option>
            <option <?php if ($volum == 250) { echo 'selected'; } ?> value="250">25cl</option>
            <option <?php echo ($volum == 330) ? 'selected' : ''; ?> value="330">33cl</option>
            <option <?php if ($volum == 750) { echo 'selected'; } ?> value="750">75cl</option>
        </select>
    </div>
    
<div class="form-group">
    <label for="brand">Marque :</label>
    <input type="text" id="brand1" list="brand" name="brand" class="form-control">
    <datalist id="brand">
        <option value="Chimay - 1">
        <option value="Ch'ti - 2">
        <option value="Duvel - 3">
        <option value="Kwak - 4">
        <option value="Guinness - 5">
    </datalist>
</div>

<div class="form-group">
    <label for="type">Type :</label>
    <input type="text" id="type1" list="type" name="type" class="form-control">
    <datalist id="type">
        <select>
            <option value="Blonde - 1">
            <option value="Brune - 2">
            <option value="Ambrée - 3">
            <option value="Noire - 4">
        </select>
    </datalist>
</div>

<button class="btn btn-primary">Ajouter</button>
</form>

<?php 
$name = null;
$degree = null;
$volum = null;
$price = null;
$brand = null;
$type = null;

if(!empty($_POST)) {


    // Définir un tableau d'erreur vide qui va se remplir après chaque erreur
    $errors = [];
    if(strlen($name) < 3) {
        $errors['name'] = 'Le nom n\'est pas valide'; // équivaut à array_push($errors, 'Le nom n\'est pas valide');
    }

    // $degree doit faire entre 0 et 20
    if($degree > 20 || $degree < 0 ) {
        $errors['degree'] = 'Le degré n\'est pas valide.'; // équivaut à array_push($errors, 'Le degré n\'est pas valide');
    }
    if($price > 99.99 || $price <= 0) {
        $errors['$price'] = 'Le prix n\'est pas valide.'; // équivaut à array_push($errors, 'Le prix n\'est pas valide');
    }
    
    // $volum doit faire 250, 330 ou 750
    if (!in_array($volum, [250, 330, 750])) {
        $errors['volum'] = 'Le volume n\'est pas valide';
    }
    var_dump($errors);

    // Vérifier que la marque existe
    $brand_id = intval(substr($brand, -1)); // "Duvel - 2" -> "2"
    
    // Requête pour aller chercher la marque en BDD

    $query = $db->prepare('SELECT * FROM brand WHERE id = :id');
    $query->bindValue(':id', $type_id, PDO::PARAM_INT);
    $query->execute();
    $type = $query->fetch();
    var_dump($brand);
    // Si la marque n'existe pas en BDD

    if($brand) {
        $errors['brand'] = 'La marque n\'existe pas';
    }
    // Vérifier que le type existe
    $type_id = intval(substr($type, -1)); // "Brune - 2" -> "2"

    // Requête pour aller chercher le type ebc en BDD
    $query = $db->prepare('SELECT * FROM ebc WHERE id = :id');
    $query->bindValue(':id', $type_id, PDO::PARAM_INT);
    $query->execute();
    $type = $query->fetch();

    if(!$type) { // Si le type n'existe pas en BDD
            $errors['type'] = 'Le type n\'existe pas';
    }

    var_dump($errors);

    // S'il n'y a pas d'erreur dans le formulaire
    if (empty($errors)) {
        $query = $db->prepare('
            INSERT INTO beer (`name`, degree, volum, `image`, price, brand_id, ebc_id)
            VALUES (:name, :degree, :volum, :image, :price, :brand_id, :ebc_id)
        ');
        $query->bindValue(':name', $name, PDO::PARAM_STR);
        $query->bindValue(':degree', $degree, PDO::PARAM_STR);
        $query->bindValue(':volum', $volum, PDO::PARAM_STR);
        $query->bindValue(':image', 'img/chimay-chimay-rouge.jpg', PDO::PARAM_STR);
        $query->bindValue(':price', $price, PDO::PARAM_STR);
        $query->bindValue(':brand_id', $brand_id, PDO::PARAM_STR);
        $query->bindValue(':ebc_id', $ebc_id, PDO::PARAM_STR);

        $query->execute(); // On insère la bière dans la BDD
    }
}
// Vérifier les champs
var_dump($_POST); 
?>
</div>

<?php
// Inclure le fichier partials/footer.php
require('partials/footer.php');
