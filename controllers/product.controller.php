
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


