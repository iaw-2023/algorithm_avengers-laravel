<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $talles = ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL', 'XXXXL', 'XXXXXL'];

        DB::table('productos')->insert([
            'Id' => random_int(0, 10000),
            'nombre' => Str::Random(25),
            'descripcion' => Str::Random(100),
            'precio' => rand(0, PHP_INT_MAX),
            'imagen' => Str::Random(100),
            'talles' => $talles[rand(0, 8)]

        ]);
    }
}
