<?php
// delete.php

require_once "../bootstrap.php";
use App\Entity\Auteur;

// Récupérer l'ID de l'auteur
$auteurId = 1;

// Utilisez l'EntityManager pour charger l'auteur à partir de la base de données en fonction de son ID
$auteur = $entityManager->find(Auteur::class, $auteurId);

if ($auteur === null) {
    echo "Auteur non trouvé.\n";
    exit(1);
}

// Supprimez tous les livres associés à cet auteur
$livres = $auteur->getLivres();
foreach ($livres as $livre) {
    $entityManager->remove($livre);
}

// Supprimez l'auteur de la base de données
$entityManager->remove($auteur);

// Exécutez les opérations en base de données
$entityManager->flush();

echo "Auteur et tous ses livres associés ont été supprimés avec succès.\n";
?>
