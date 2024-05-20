<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;

// class AutoreSeeder extends Seeder
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
use App\Models\Autore;

class AutoreSeeder extends Seeder
{
    public function run()
    {
        Autore::create(['nome' => 'Autore 1']);
        Autore::create(['nome' => 'Autore 2']);
    }
}
