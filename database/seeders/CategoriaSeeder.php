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
        DB::table('categorias')->insert([
            'id' => 1,
            'nombre' => 'Masculinidades',
            'descripcion' => 'Ropa diseñada para masculinidades'
        ]);
        DB::table('categorias')->insert([
            'id' => 2,
            'nombre' => 'Femenidades',
            'descripcion' => 'Ropa diseñada para feminidades'
        ]);
        DB::table('categorias')->insert([
            'id' => 3,
            'nombre' => 'Unisex',
            'descripcion' => 'Ropa diseñada sin género específico'
        ]);
        DB::table('categorias')->insert([
            'id' => 4,
            'nombre' => 'Infancias',
            'descripcion' => 'Ropa especialmente diseñada para niños y niñas'
        ]);
    }
}
