<?php
require_once __DIR__ . '/../utils/error.php';
require_once __DIR__ . '/../utils/validator.php';
require_once __DIR__ . '/../utils/enums.php';
require_once __DIR__ . '/../views/product.view.php';
require_once __DIR__ . '/../models/product.model.php';
require_once __DIR__ . '/../service/service.php';

function saveProduct(){
    global $products;
    do {
        $errors = [];
        $libelle = saisie("Entrez le libellé: ");
        required($libelle,$errors,"Le libellé est obligatoire");
        unique($products,$libelle,$errors,"Ce libellé existe déjà");
        showError($errors);
    } while (count($errors)!= 0);
    $newProduct=[
        "ref"=>genererReference($products),
        "libele" => $libelle,
    ];
    $products[] = $newProduct;


    
    

}