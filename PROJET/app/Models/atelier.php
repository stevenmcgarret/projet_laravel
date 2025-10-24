<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class atelier extends Model
{
    use HasFactory;
    protected $fillable = [
        "immatriculation","string","marque","modele","couleur","annee","kilometrage","carrosserie","energie","boite",
    ] ;
}
