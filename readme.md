# Projet d'évaluation PHP - Backend

## Objectif

Votre tâche est de créer une petite application de gestion de bibliothèque en utilisant PHP. L'application doit permettre aux utilisateurs de visualiser, ajouter, modifier et supprimer des livres de la bibliothèque.

## Consignes

1. **Base de données** : Créez une base de données MySQL nommée "library" avec une table "books". Cette table doit contenir les champs suivants : id (int, auto-increment, primary key), title (varchar), author (varchar), year (int), genre (varchar).

2. **Connexion à la base de données** : Utilisez PDO pour vous connecter à votre base de données. Assurez-vous de gérer les exceptions et les erreurs de connexion.

3. **Page d'accueil** : Créez une page d'accueil qui affiche tous les livres de la bibliothèque dans un tableau. Chaque ligne du tableau doit avoir un bouton "Modifier" et "Supprimer".

4. **Ajouter un livre** : Sur la page d'accueil, ajoutez un bouton "Ajouter un livre" qui redirige vers une nouvelle page avec un formulaire pour ajouter un nouveau livre à la bibliothèque. Une fois le formulaire soumis, le livre doit être ajouté à la base de données et l'utilisateur doit être redirigé vers la page d'accueil.

5. **Modifier un livre** : Lorsque l'utilisateur clique sur le bouton "Modifier" sur la page d'accueil, il doit être redirigé vers une page avec un formulaire pré-rempli avec les informations du livre. L'utilisateur doit pouvoir modifier les informations et, une fois le formulaire soumis, les informations du livre doivent être mises à jour dans la base de données.

6. **Supprimer un livre** : Lorsque l'utilisateur clique sur le bouton "Supprimer", le livre correspondant doit être supprimé de la base de données et l'utilisateur doit être redirigé vers la page d'accueil.

7. **Gestion des erreurs** : Assurez-vous que votre application gère correctement les erreurs. Par exemple, elle ne doit pas planter si la base de données est inaccessible. De plus, elle doit afficher des messages d'erreur appropriés si, par exemple, l'utilisateur tente de soumettre un formulaire vide.

8. **Fichiers et organisation du code** : Votre code doit être bien organisé et facile à lire. Utilisez l'inclusion de fichiers pour séparer les différentes parties de votre code (par exemple, la connexion à la base de données, l'affichage de la page d'accueil, etc.). Utilisez des commentaires pour expliquer ce que fait votre code.

9. **Bonus** : Si vous avez le temps, ajoutez des fonctionnalités supplémentaires à votre application. Par exemple, vous pourriez permettre aux utilisateurs de rechercher des livres par titre ou par auteur, ou ajouter une fonctionnalité de tri pour afficher les livres par année de publication ou par genre.

## Critères d'évaluation

- Respect des consignes
- Fonctionnalité de l'application
- Propreté et organisation du code
- Gestion des erreurs
- Bonus : fonctionnalités supplémentaires

## Informations complémentaires
Le code HTML de base est fourni et intègre deux exemples de livres, ainsi que des modales pour "Ajouter un livre", "Modifier" et "supprimer".
Vous pouvez utiliser ces modales et de l'AJAX pour l'ajout, la modification et la suppression de livre.
Si vous ne souhaitez pas utiliser d'AJAX, vous devez créer une page pour l'ajout de livre et une page pour la modification de livre.
Pour la suppression de livre, vous êtes libre de faire ce qui vous semble le plus logique.

Bonne chance !