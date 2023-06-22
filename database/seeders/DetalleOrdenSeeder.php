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
            'compra_id' => 1,
            'producto_id' => 1,
            'cantidad' => 4
        ]);
        DB::table('detalle_orden')->insert([
            'compra_id' => 1,
            'producto_id' => 6,
            'cantidad' => 1
        ]);
        DB::table('detalle_orden')->insert([
            'compra_id' => 1,
            'producto_id' => 2,
            'cantidad' => 2
        ]);

    }
}
