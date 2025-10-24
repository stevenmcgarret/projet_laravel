<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reparer extends Model
{
    use HasFactory;

    protected $fillable = [
        "atelier_id",
        "Reparateur_id",
        "date",
        "duree_main_oeuvre",
        "objet_reparation"
    ];
}
