<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    // Specifica il nome della tabella
    protected $table = 'libri';

    // Definisci i campi che possono essere riempiti massivamente
    protected $fillable = ['titolo', 'descrizione', 'autore_id'];

    public function autore()
    {
        return $this->belongsTo(Autore::class);
    }

    public function categorie()
    {
        return $this->belongsToMany(Categoria::class, 'libro_categoria');
    }
}
