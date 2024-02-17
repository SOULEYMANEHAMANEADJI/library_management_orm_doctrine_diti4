<?php
// read.php

require_once "../bootstrap.php";
use App\Entity\Auteur;

// Récupérer l'ID de l'auteur spécifique
$auteurId = 1;

// Utilisez l'EntityManager pour charger l'auteur à partir de la base de données en fonction de son ID
$auteur = $entityManager->find(Auteur::class, $auteurId);

if ($auteur === null) {
    echo "Auteur non trouvé.\n";
    exit(1);
}

// Accédez à la liste de ses livres associés
$livres = $auteur->getLivres();

echo "Auteur: " . $auteur->getNom() . "\n";
echo "Livres associés:\n";

foreach ($livres as $livre) {
    echo "- " . $livre->getTitre() . "\n";
}
?>