<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;

// class LibroSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         //
//     }
// }


use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibroSeeder extends Seeder
{
    public function run()
    {
        Libro::create(['titolo' => 'Libro 1', 'descrizione' => 'Descrizione Libro 1', 'autore_id' => 1]);
        Libro::create(['titolo' => 'Libro 2', 'descrizione' => 'Descrizione Libro 2', 'autore_id' => 2]);
    }
}
