<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // Specifica il nome della tabella
    protected $table = 'categorie';

    // Definisci i campi che possono essere riempiti massivamente
    protected $fillable = ['nome'];

    // Definisci la relazione con il modello Libro
    public function libri()
    {
        return $this->belongsToMany(Libro::class, 'libro_categoria');
    }
}
