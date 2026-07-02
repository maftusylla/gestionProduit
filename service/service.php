<?php
require_once __DIR__ . '/../models/product.model.php';

function genererReference(array $products): string
{
    $taille = count($products) + 1;
    if ($taille <= 9) {
        $ref = "REF00";
    } elseif ($taille <= 99) {
        $ref = "REF0";
    } else {
        $ref = "REF";
    }
    return $ref . $taille;
}


function creerProduit(array &$products, string $libelle, float $prix, int $quantite): array
{
    $ref = genererReference($products);
    return ajouterProduit($products, $ref, $libelle, $prix, $quantite);
}


function calculerMontantCommande(array $commande, array $products): float
{
    $montant = 0;
    foreach ($commande['product'] as $ligne) {
        $product = $products[$ligne['productIndex']] ?? null;
        if ($product !== null) {
            $montant += $product['prix'] * $ligne['quantite'];
        }
    }
    return $montant;
}
