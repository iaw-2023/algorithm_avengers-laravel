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
        DB::table('detalle_orden')->insert([
            'id_compra' => 1,
            'id_producto' => 1,
            'cantidad' => random_int(1,127)
        ]);
        DB::table('detalle_orden')->insert([
            'id_compra' => 1,
            'id_producto' => 6,
            'cantidad' => 1
        ]);
        DB::table('detalle_orden')->insert([
            'id_compra' => 1,
            'id_producto' => 2,
            'cantidad' => 2
        ]);

    }
}
