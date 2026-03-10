<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    protected $table = 'livres';

    protected $fillable = [
        'categorie_id',
        'titre',
        'slug',
        'auteur',
        'isbn',
        'description',
        'date_publication',
        'est_actif',
        'nombre_vues',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function exemplaires()
    {
        return $this->hasMany(Exemplaire::class, 'livre_id');
    }

    public function consultations()
    {
        return $this->hasMany(Consultation::class, 'livre_id');
    }
}
