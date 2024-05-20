<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// class DatabaseSeeder extends Seeder
// {

//     public function run(): 
//     {
//         // User::factory(10)->create();

//         User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);
//     }
// }


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AutoreSeeder::class,
            CategoriaSeeder::class,
            LibroSeeder::class,
        ]);
    }
}
