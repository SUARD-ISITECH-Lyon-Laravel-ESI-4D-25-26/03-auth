<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function show()
    {
        return view('auth.profile');
    }

    public function update(ProfileUpdateRequest $request)
    {
        // TÂCHE : complétez cette méthode pour mettre à jour le nom (name) et l'email de l'utilisateur
        // Si le mot de passe est renseigné, mettez-le également à jour
        // Indice : utilisez $request->user() pour accéder à l'utilisateur connecté (voir https://laravel.com/docs/authentication#retrieving-the-authenticated-user)
        // Votre code ici

        return redirect()->route('profile.show')->with('success', 'Profile updated.');
    }
}
