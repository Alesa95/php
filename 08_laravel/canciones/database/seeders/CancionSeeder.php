<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CancionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cancions')->insert([
            [
                'titulo_cancion' => 'Ave María',
                'duracion' => 140,
                'genero_cancion' => 'Pop',
                'artista_id' => 1
            ],
            [
                'titulo_cancion' => 'Dos hombres y un destino',
                'duracion' => 132,
                'genero_cancion' => 'Balada latina',
                'artista_id' => 2
            ],
            [
                'titulo_cancion' => 'Perdona si te olvido',
                'duracion' => 165,
                'genero_cancion' => 'Pop',
                'artista_id' => 3
            ]
        ]);
    }
}
