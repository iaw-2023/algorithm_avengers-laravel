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
            'nombre' => 'Adultos',
            'descripcion' => 'Ropa diseñada para adultos'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Niños',
            'descripcion' => 'Ropa especialmente diseñada para niños y niñas'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Femenidades',
            'descripcion' => 'Ropa diseñada para feminidades'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Masculinidades',
            'descripcion' => 'Ropa diseñada para masculinidades'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Remeras',
            'descripcion' => 'Remeras manga corta'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Camisetas',
            'descripcion' => 'Camisetas y remeras manga larga'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Buzos',
            'descripcion' => 'Buzos y camisetas abrigadas'
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Vestidos',
            'descripcion' => 'Vestidos para femenidades'
        ]);
    }
}
