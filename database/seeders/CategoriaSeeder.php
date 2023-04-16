<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categoria')->insert([
            'codigo' => random_int(0, 10000),
            'nombre' => Str::Random(25),
            'descripcion' => Str::Random(50)
        ]);
        DB::table('categoria')->insert([
            'codigo' => 1,
            'nombre' => 'Adultos',
            'descripcion' => 'Ropa diseñada para adultos'
        ]);
        DB::table('categoria')->insert([
            'codigo' => 2,
            'nombre' => 'Niños',
            'descripcion' => 'Ropa especialmente diseñada para niños y niñas'
        ]);
        DB::table('categoria')->insert([
            'codigo' => 3,
            'nombre' => 'Femenidades',
            'descripcion' => 'Ropa diseñada para feminidades'
        ]);
        DB::table('categoria')->insert([
            'codigo' => 4,
            'nombre' => 'Masculinidades',
            'descripcion' => 'Ropa diseñada para masculinidades'
        ]);
        DB::table('categoria')->insert([
            'codigo' => 5,
            'nombre' => 'Remeras',
            'descripcion' => 'Remeras manga corta'
        ]);
        DB::table('categoria')->insert([
            'codigo' => 6,
            'nombre' => 'Camisetas',
            'descripcion' => 'Camisetas y remeras manga larga'
        ]);
        DB::table('categoria')->insert([
            'codigo' => 7,
            'nombre' => 'Buzos',
            'descripcion' => 'Buzos y camisetas abrigadas'
        ]);
        DB::table('categoria')->insert([
            'codigo' => 8,
            'nombre' => 'Vestidos',
            'descripcion' => 'Vestidos para femenidades'
        ]);
    }
}
