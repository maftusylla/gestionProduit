<?php

enum ChampErreur: string
{
    case LIBELLE = 'libele';
    case PRIX = 'prix';
    case QUANTITE = 'quantite';
    case NOM = 'nom';
    case TEL = 'tel';
    case ADRESSE = 'address';
}


enum TypeErreur: string
{
    case REQUIRED = 'required';
    case UNIQUE = 'unique';
    case POSITIVE = 'positive';
}


enum MessageErreur: string
{
    case LIBELLE_REQUIRED = "Le libellé est obligatoire";
    case LIBELLE_UNIQUE = "Ce libellé existe déjà";
    case PRIX_POSITIVE = "Le prix doit être positif";
    case QUANTITE_POSITIVE = "La quantité doit être positive";

    case NOM_REQUIRED = "Le nom est obligatoire";
    case TEL_REQUIRED = "Le telephone est obligatoire";
    case TEL_UNIQUE = "Le telephone existe déjà";

    case PRODUIT_INTROUVABLE = "Produit non trouvé";
}
