
# Beer PDO SQL

A partir du tableau, on doit reproduire le schéma de la BDD sur workbench

A partir du schema, on pourra créer la base de données.

Au niveau du PHP nous aurons besoin de créer plusieurs fichiers :
- config/database.php -> Connexion à la base de données en PDO, sera inclus dans tous les fichiers PHP
- partials/header.php -> Le header du site à inclure dans toutes les pages (bootstrap)
- partials/footer.php -> Le footer du site à inclure dans toutes les pages
- index.php -> Page d'accueil du site
- beer_list.php -> Lister toutes les bières de la BDD
- beer_single.php -> La page d'une bière seule

## Ajouter une bière

- Créer la page beer_add.php
- Ne pas oublier d'inclure le header et le footer
- Ajouter un titre "Ajouter une bière"
- Ajouter un formulaire avec les champs suivants : 
    - Nom : Champ texte
    - Degrés : Champ texte ou Range
    - Volume : Champ select
    - Prix : Champ texte
    - Marque : Champ select ou autocompletion (datalist)
    - Type : Champ select ou autocompletion (datalist)
- Ne pas oublier le bouton pour soumettre le formulaire
- Ne pas oublier la méthode du formulaire
- Lorsque le formulaire est soumis, il faudra récupérer la valeur de chacun des champs