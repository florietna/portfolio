<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    // ...

    public function getAuthIdentifierName()
    {
        return 'id'; // Le nom de la colonne qui sert d'identifiant
    }

    public function getAuthIdentifier()
    {
        return $this->getKey(); // La valeur de l'identifiant de l'utilisateur
    }

    public function getAuthPassword()
    {
        return $this->password; // Le mot de passe de l'utilisateur
    }

    // Les autres méthodes nécessaires...

    // Exemple :
    public function getRememberToken()
    {
        return $this->remember_token; // Si vous utilisez une fonctionnalité de "remember me"
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value; // Si vous utilisez une fonctionnalité de "remember me"
    }

    public function getRememberTokenName()
    {
        return 'remember_token'; // Si vous utilisez une fonctionnalité de "remember me"
    }

    // ...
}
