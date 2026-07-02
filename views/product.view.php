<?php
// view/product.view.php
require_once __DIR__ . '/../utils/view.utils.php';
require_once __DIR__ . '/../utils/enums.php';

function demanderLibelleProduit(): string
{
    return saisie("Entrez le libellé: ");
}

function demanderPrixProduit(): float
{
    return (float) saisie("Entrez le prix: ");
}

function demanderQuantiteProduit(): int
{
    return (int) saisie("Entrez la quantité: ");
}

function afficherProduit(array $product): void
{
    echo "Réf: {$product['ref']} - Libellé: {$product['libele']} - Prix: {$product['prix']} - Quantité: {$product['quantite']}\n";
}
