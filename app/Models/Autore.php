<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autore extends Model
{
    use HasFactory;

    // Specifica il nome della tabella
    protected $table = 'autori';

    // Definisci i campi che possono essere riempiti massivamente
    protected $fillable = ['nome'];

    // Definisci la relazione con il modello Libro
    public function libri()
    {
        return $this->hasMany(Libro::class);
    }
}
