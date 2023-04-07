<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetalleOrdenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detalle-orden')->insert([
            'id_compra' => 1,
            'id_producto' => 1,
            'cantidad' => random_int(0, 1000)
        ]);
    }
}
