<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model {
    protected $fillable = [
        'titolo', 'autore', 'prezzo', 'quantita',
    ];
}
