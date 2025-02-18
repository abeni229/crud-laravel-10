<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;  
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;  // Utilisation du trait HasFactory

    protected $fillable = [
        'nom',
        'prenom',
        'filiere',
        'tel',
        'niveau',
    ];
}

