<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductoCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    /*
       1 : 'Adultos',
       2 : 'Niños',
       3 : 'Femenidades',
       4 : 'Masculinidades',
       5 : 'Remeras',
       6 : 'Camisetas',
       7 : 'Buzos',
       8 : 'Vestidos'
    */

    public function run(): void
    {
        // Remeras Rebeldes San Martin Revolución
        DB::table('prod_cat')->insert([
            'id_producto' => 1,
            'id_categoria' => 1
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 1,
            'id_categoria' => 4
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 1,
            'id_categoria' => 6
        ]);

        // Buzo Rebelde Friza Malvinas
        DB::table('prod_cat')->insert([
            'id_producto' => 2,
            'id_categoria' => 1
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 2,
            'id_categoria' => 3
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 2,
            'id_categoria' => 4
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 2,
            'id_categoria' => 7
        ]);

        // Remeras Rebeldes El Diego
        DB::table('prod_cat')->insert([
            'id_producto' => 3,
            'id_categoria' => 1
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 3,
            'id_categoria' => 4
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 3,
            'id_categoria' => 5
        ]);

        // Remeras Rebeldes Revolución
        DB::table('prod_cat')->insert([
            'id_producto' => 4,
            'id_categoria' => 1
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 4,
            'id_categoria' => 3
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 4,
            'id_categoria' => 6
        ]);

        // Remeras Rebeldes Escuela Pública E Inclusiva
        DB::table('prod_cat')->insert([
            'id_producto' => 5,
            'id_categoria' => 1
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 5,
            'id_categoria' => 3
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 5,
            'id_categoria' => 6
        ]);

        // Vestido Rebelde Wiphala Transformacion
        DB::table('prod_cat')->insert([
            'id_producto' => 6,
            'id_categoria' => 1
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 6,
            'id_categoria' => 3
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 6,
            'id_categoria' => 8
        ]);

        // Remeras Rebeldes Malvinas Full Estampa
        DB::table('prod_cat')->insert([
            'id_producto' => 7,
            'id_categoria' => 1
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 7,
            'id_categoria' => 4
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 7,
            'id_categoria' => 5
        ]);

        // Remeras Rebeldes Maestres
        DB::table('prod_cat')->insert([
            'id_producto' => 8,
            'id_categoria' => 1
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 8,
            'id_categoria' => 4
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 8,
            'id_categoria' => 5
        ]);

        // Remeras Rebeldes Argentina No Se Usa
        DB::table('prod_cat')->insert([
            'id_producto' => 9,
            'id_categoria' => 1
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 9,
            'id_categoria' => 4
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 9,
            'id_categoria' => 5
        ]);

        // Remeras Rebeldes Estrella Roja
        DB::table('prod_cat')->insert([
            'id_producto' => 10,
            'id_categoria' => 1
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 10,
            'id_categoria' => 3
        ]);
        DB::table('prod_cat')->insert([
            'id_producto' => 10,
            'id_categoria' => 5
        ]);
    }
}
