# Gestion d'une Bibliothèque avec Doctrine

Ce projet consiste à développer une application de gestion de bibliothèque en utilisant Symfony avec Doctrine ORM pour la gestion des entités. L'application permettra de gérer les livres et les auteurs, avec une relation OneToMany entre les deux entités (un auteur peut avoir plusieurs livres, mais un livre appartient à un seul auteur).

## Tâches à Réaliser

### 1. Création des Classes des Entités

- Créez les classes PHP `Auteur` et `Livre` dans le répertoire `src/Entity`.
- Utilisez les annotations Doctrine pour définir les propriétés, les relations et les clés primaires.

### 2. Configuration de Doctrine

- Assurez-vous que Doctrine est correctement configuré dans le projet Symfony.

### 3. Gestion des Opérations CRUD

Implémentez les opérations CRUD suivantes :

#### Create

- Créez un nouvel auteur et plusieurs livres associés à cet auteur.

#### Read

- Récupérez un auteur spécifique avec tous ses livres.

#### Update

- Modifiez le titre d'un livre existant.

#### Delete

- Supprimez un auteur avec tous ses livres.

### Conseils

- Utilisez l'EntityManager pour persister et récupérer les entités.
- Assurez-vous de gérer correctement les cascades pour les opérations liées à la relation OneToMany.

## Ressources Utiles

- [Documentation Doctrine ORM](https://www.doctrine-project.org/projects/doctrine-orm/en/2.11/reference/association-mapping.html)
- [Symfony Documentation](https://symfony.com/doc/current/index.html)

---
