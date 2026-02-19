<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Routes Web
|--------------------------------------------------------------------------
|
| Ce fichier contient les routes web de votre application.
| Ces routes sont chargées par le RouteServiceProvider dans un groupe
| qui utilise le middleware "web".
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

// TÂCHE : les routes du profil doivent être accessibles uniquement aux utilisateurs connectés
// Indice : utilisez le middleware "auth" pour protéger ces routes (voir https://laravel.com/docs/authentication#protecting-routes)
Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

// TÂCHE : l'URL "/secretpage" doit être accessible uniquement aux utilisateurs ayant vérifié leur email
// Ajoutez un middleware ici, et modifiez le code dans app/Models/User.php pour activer cette fonctionnalité
// Indice : utilisez le middleware "verified" (voir https://laravel.com/docs/verification#protecting-routes)
Route::view('/secretpage', 'secretpage')
    ->name('secretpage');

// TÂCHE : l'URL "/verysecretpage" doit demander à l'utilisateur de confirmer son mot de passe
// Ajoutez un middleware ici
// Indice : utilisez le middleware "password.confirm" (voir https://laravel.com/docs/authentication#password-confirmation)
Route::view('/verysecretpage', 'verysecretpage')
    ->name('verysecretpage');

require __DIR__.'/auth.php';
