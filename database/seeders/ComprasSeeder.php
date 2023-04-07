<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Dflydev\DotAccessData\Data;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ComprasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('compras')->insert([
            'codigo' => random_int(0, 10000),
            'precio' => rand(0, PHP_INT_MAX),
            'fecha' => date("Y-m-d"),
            'direccion_entrega' => Str::Random(15),
            'id_cliente' => 1
        ]);
    }
}
