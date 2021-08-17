<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Book::create([
            'title' => 'Buku 1',
            'author' => 'Evo',
            'publication' => 'Web',
            'year' => 2021
        ]);
        
        Book::create([
            'title' => 'Buku 2',
            'author' => 'Miko',
            'publication' => 'App',
            'year' => 3033
        ]);

        Book::create([
            'title' => 'Buku 3',
            'author' => 'Megumin',
            'publication' => 'Gramed',
            'year' => 6969
        ]);
    }
}
