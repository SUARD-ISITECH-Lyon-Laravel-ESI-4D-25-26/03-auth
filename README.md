## Testez vos compétences Laravel — Authentification

Ce dépôt est un exercice pratique : réalisez les tâches listées ci-dessous
et faites passer les tests PHPUnit, qui échouent volontairement pour le moment.

Pour vérifier votre progression, les tests se trouvent dans `tests/Feature/AuthenticationTest.php`.

Au départ, si vous exécutez `php artisan test`, tous les tests échouent.
Votre objectif est de les faire passer un par un.

> ⚠️ **Vous n'avez pas le droit de modifier les fichiers de tests.**


## Installation du projet

```sh
git clone <url-du-depot> projet
cd projet
cp .env.example .env  # Éditez vos variables d'environnement
composer install
php artisan key:generate
```

Puis lancez `php artisan test` pour voir les erreurs à corriger.


## Soumettre votre solution

Créez une Pull Request (ou Merge Request) vers la branche `main`.

---

## Tâche 1. Routes protégées par l'authentification (middleware auth)

Dans le fichier `routes/web.php`, les routes du profil (`/profile`) doivent être
accessibles uniquement aux utilisateurs connectés.
Ajoutez le middleware `"auth"` pour protéger ces routes.

Méthode de test : `test_profile_routes_are_protected_from_public()`.

---

## Tâche 2. Lien de navigation visible uniquement pour les utilisateurs connectés

Dans le fichier `resources/views/layouts/navigation.blade.php`, le lien "Profile"
doit être affiché uniquement aux utilisateurs connectés.
Les utilisateurs non connectés ne doivent pas voir ce lien.

Méthode de test : `test_profile_link_is_invisible_in_public()`.

---

## Tâche 3. Champs du profil pré-remplis

Dans le fichier `resources/views/auth/profile.blade.php`, remplacez les valeurs `"???"`
des champs `name` et `email` par les données de l'utilisateur actuellement connecté.

Méthode de test : `test_profile_fields_are_visible()`.

---

## Tâche 4. Mise à jour du profil

Dans le fichier `app/Http/Controllers/ProfileController.php`, complétez la méthode `update()`
avec le code permettant de mettre à jour le nom (name) et l'email de l'utilisateur.
Si le mot de passe est renseigné dans le formulaire, mettez-le également à jour.

Méthodes de test : `test_profile_name_email_update_successful()` et `test_profile_password_update_successful()`.

---

## Tâche 5. Vérification de l'adresse email (email verification)

Rendez l'URL `/secretpage` accessible uniquement aux utilisateurs ayant vérifié leur adresse email.
Vous devez modifier deux fichiers :

- Dans `routes/web.php` : ajoutez le middleware `"verified"` à la route `/secretpage`.
- Dans `app/Models/User.php` : activez la vérification d'email en implémentant l'interface appropriée.

Méthode de test : `test_email_can_be_verified()`.

---

## Tâche 6. Confirmation du mot de passe (password confirmation)

Faites en sorte que l'URL `/verysecretpage` redirige l'utilisateur vers une page
lui demandant de ressaisir son mot de passe.
Dans le fichier `routes/web.php`, ajoutez le middleware `"password.confirm"` à cette route.

Méthode de test : `test_password_confirmation_page()`.

---

## Tâche 7. Règle de validation du mot de passe (lettre obligatoire)

Par défaut, le formulaire d'inscription exige un mot de passe d'au moins 8 caractères.
Ajoutez une règle de validation pour que le mot de passe contienne au moins une lettre
(minuscule ou majuscule).

Ainsi, le mot de passe `12345678` est invalide, mais `a12345678` est valide.

Modifiez le fichier `app/Http/Controllers/Auth/RegisteredUserController.php`.

Méthode de test : `test_password_at_least_one_uppercase_lowercase_letter()`.

---

## Questions / Problèmes ?

Si vous rencontrez des difficultés ou avez des suggestions, créez une Issue.

Bon courage !

