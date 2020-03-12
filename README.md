# 4-voitures
TP 4 udemy sur Symfony 

## Outils
IDE : Visual Studio Code -> extensions :
- PHP Intelephense
- PHP DocBlocker
- PHP import checker
- PHP Getters & Setters
- PHP Namespace Resolver
- Twig Language 2
- DotEnv
- Symfony for VSCode

Dépendences :
- fixtures
- fzaninotto/faker

## Cheminement
### Création de la BDD et des entités
- Création d'un projet via commande Symfony.
- Modification du fichier .env pour la bDD
- Création de la BDD
- Création des entités : Marque, Modele et Voiture avec relations

### Données, Fixtures et Faker
- Ajout de Fixtures
- Création d'un jeu de test manuellement pour générer des marques et des modèles de voiture
- Ajout de Faker
- Utilisation de Faker avec les fixtures afin de générer des voitures aléatoirement (plaque immatriculation, nombre de portes et année).
- Chargement des fixtures dans la BDD