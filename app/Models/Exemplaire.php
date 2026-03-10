<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exemplaire extends Model
{
    protected $table = 'exemplaires';

    protected $fillable = [
        'livre_id',
        'code_inventaire',
        'etat',
        'date_acquisition',
        'note_degradation',
        'date_degradation',
    ];

    public function livre()
    {
        return $this->belongsTo(Livre::class, 'livre_id');
    }
}
