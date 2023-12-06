# PokeDock
Pokémon Web Game.

## Sujet 
Projet 2023-2024 : 

Socle technique : 

- pour les utilisateurs Windows Laragon

- framework php Laravel (version 9 ou 10)


- BDD au choix (MySQL par exemple)

   > Créer des migrations pour les tables

- Backend avec Laravel

   > Créer les modèles Eloquent pour la gestion des objets 
   > Mettre en place les contrôleurs pour gérer les opérations CRUD.                 

- Exposer des routes.

Ajouter des web services Json

## Ideas
- 5 crédits aloués par jour.
- On consomme les crédits en attrapant des pokemons aléatoirement.
     > On sélectionne un mode (PokeBall, SuperBall ou MasterBall), qui consomme un certain nombre de crédit(s).
     > 
     > 1 tirage = 1 pokemon.
- Possibilité de racheter des crédits.

## Rareté du Pokemons
- Null -> Première évolution
- Moyen -> Deuxième et Troisième évolution
- Légendaires -> Pokémon légendaires + fabuleux

## Types du Pokemon
- Feu.
- Eau.
- Plante.
- ...

## Mode 
- Pokeball -> proba faible moyen & légendaire. (1 cédit)
- SuperBall -> moyen garenti 5% légendaire. (5 crédits)
- MasterBall -> 100% légendaire. (25 crédits)

## Classes

### Class
> family
>
> order
>
> order_item
>
> pokemon
>
> rarity
>
> region
>
> shoppack
>
> summon_pack
>
> tier
>
> type
>
> user

## Achat crédit 
> 5 -> 0.99€
> 
> 10 -> 1.49€
> 
> 100 -> 4.99€ 

## Remarques
- Laravel embarque une gestion user native.

# Doc 

## Tools
> Herd
> 
> Diagrams.net
>
> MySQLWorkbench

# Base de données

![Description de l'image](./pokedock.drawio.svg)