<?php
require_once __DIR__ . '/../utils/error.php';
require_once __DIR__ . '/../utils/validator.php';
require_once __DIR__ . '/../utils/enums.php';
require_once __DIR__ . '/../views/product.view.php';
require_once __DIR__ . '/../models/product.model.php';
require_once __DIR__ . '/../service/service.php';

function archiverProduit(): void
{
    global $productsArchived, $products;

    $value = demanderLibelleRecherche();
    $indexArchived = getProductByLibele($products, $value);
    if ($indexArchived !== -1) {
        $productArchived = supprimerProduit($indexArchived, $products);
        $productsArchived[] = $productArchived;
    } else {
        afficherProduitIntrouvable();
    }
}


