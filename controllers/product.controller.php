<?php
require_once __DIR__ . '/../utils/error.php';
require_once __DIR__ . '/../utils/validator.php';
require_once __DIR__ . '/../utils/enums.php';
require_once __DIR__ . '/../views/product.view.php';
require_once __DIR__ . '/../models/product.model.php';
require_once __DIR__ . '/../service/service.php';

function saveProduct(): void
{
    global $products;
    do {
        $errors = [];
        $libelle = demanderLibelleProduit();
        required($libelle, $errors, MessageErreur::LIBELLE_REQUIRED, ChampErreur::LIBELLE);
        unique($products, $libelle, $errors, MessageErreur::LIBELLE_UNIQUE, ChampErreur::LIBELLE);
        $prix = demanderPrixProduit();
        positive($prix, $errors, MessageErreur::PRIX_POSITIVE, ChampErreur::PRIX);
        $quantite = demanderQuantiteProduit();
        positive((float) $quantite, $errors, MessageErreur::QUANTITE_POSITIVE, ChampErreur::QUANTITE);
        showError($errors);
    } while (count($errors) != 0);

    $newProduct = creerProduit($products, $libelle, $prix, $quantite);
    afficherProduit($newProduct);
}
    
    

