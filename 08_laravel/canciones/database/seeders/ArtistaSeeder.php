<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ArtistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artistas')->insert([
            [
                'nombre' => 'David Bisbal',
                'genero_artista' => 'Hombre'
            ],
            [
                'nombre' => 'David Bustamante',
                'genero_artista' => 'Hombre'
            ],
            [
                'nombre' => 'Nerea Rodríguez',
                'genero_artista' => 'Mujer'
            ]
        ]);
    }
}
