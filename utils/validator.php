<?php
require_once __DIR__ . '/enums.php';

function required(string $value, array &$errors, MessageErreur $message, ChampErreur $champ = ChampErreur::LIBELLE): void
{
    if (empty($value)) {
        $errors[$champ->value][TypeErreur::REQUIRED->value] = $message->value;
    }
}

function unique(array $datas, string $value, array &$errors, MessageErreur $message, ChampErreur $champ = ChampErreur::LIBELLE): void
{
    foreach ($datas as $data) {
        if ($data[$champ->value] === $value) {
            $errors[$champ->value][TypeErreur::UNIQUE->value] = $message->value;
        }
    }
}

/**
 * RG3: le prix et la quantité sont positifs
 */
function positive(float $value, array &$errors, MessageErreur $message, ChampErreur $champ): void
{
    if ($value <= 0) {
        $errors[$champ->value][TypeErreur::POSITIVE->value] = $message->value;
    }
}
