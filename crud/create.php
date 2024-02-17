<?php
// create.php
require_once "../bootstrap.php";
use App\Entity\Auteur;
use App\Entity\Livre;

// Création d'un nouvel auteur
$auteur = new Auteur();
$auteur->setNom('Ibrahima SY');

// Création de plusieurs livres associés à cet auteur
$livre1 = new Livre();
$livre1->setTitre('Think Python');
$livre1->setAuteur($auteur);

$livre2 = new Livre();
$livre2->setTitre('Fluent Python');
$livre2->setAuteur($auteur);

// Persistance des entités
$entityManager->persist($auteur);
$entityManager->persist($livre1);
$entityManager->persist($livre2);

// Exécution des opérations en base de données
$entityManager->flush();

echo "Nouvel auteur et livres associés créés avec succès.\n";

?>