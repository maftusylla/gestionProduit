<?php
// model/product.model.php
// Etat + règles de génération/recherche liées aux produits

$products = [
    0 => ['ref' => 'ref1', 'libele' => 'lib1', 'prix' => 2000, 'quantite' => 12],
    1 => ['ref' => 'ref2', 'libele' => 'lib2', 'prix' => 500, 'quantite' => 2],
];

$productsArchived = [];


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

function getProductByLibele(array $products, string $value): int
{
    foreach ($products as $index => $product) {
        if ($product["libele"] == $value) {
            return $index;
        }
    }
    return -1;
}

function ajouterProduit(array &$products, string $libelle, float $prix, int $quantite): array
{
    $newProduct = [
        "ref" => genererReference($products),
        "libele" => $libelle,
        "prix" => $prix,
        "quantite" => $quantite,
    ];
    $products[] = $newProduct;
    return $newProduct;
}

function supprimerProduit(int $index, array &$products): array
{
    return array_splice($products, $index, 1)[0];
}
