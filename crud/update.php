<?php
// update.php

require_once "../bootstrap.php";
use App\Entity\Livre;

// Récupérer l'ID du livre
$livreId = 1;

// Utilisez l'EntityManager pour charger le livre à partir de la base de données en fonction de son ID
$livre = $entityManager->find(Livre::class, $livreId);

if ($livre === null) {
    echo "Livre non trouvé.\n";
    exit(1);
}

// Modifiez le titre du livre
$nouveauTitre = "Python Crash Course";
$livre->setTitre($nouveauTitre);

// Utilisez l'EntityManager pour mettre à jour le livre dans la base de données
$entityManager->flush();

echo "Titre du livre mis à jour avec succès.\n";
?>
