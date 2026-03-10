<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorie extends Model
{
    
    protected $table = 'categories';

    protected $fillable = [
        'nom',
        'slug',
        'description',
    ];

    public function livres()
    {
        return $this->hasMany(Livre::class, 'categorie_id');
    }
}
