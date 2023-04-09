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
        // talles = ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL', 'XXXXL', 'XXXXXL'];

        DB::table('productos')->insert([
            'Id' => 1,
            'nombre' => 'Remeras Rebeldes San Martin Revolución',
            'descripcion' => 'Remera hombre adulto. Remera muuuyyyy Argentina 100% Algodón.
            Nuestras Remeras son y serán algo distinto en nuestra linea de producto, ya que es el único espacio que nos permite expresarnos de una forma valiente, certera y convincente de lo que sentimos,
            No siempre nos pasa que por medio de la ropa podamos decir, gritar y llorar así que esta fue la gran excusa para crear Manos Rebelde, tener este espacio de concientización humana verde y de alma transparente.
            Nuestros tejidos son hechos absolutamente en Argentina de títulos excelentes. Nuestras calidades son de 100% algodón peinado 24/1, telas que ya casi no se considera que tenga ningún tipo de encogimiento, aunque todos los algodones están expuestos (según el trato que le damos al lavarlo) a pequeños movimientos de la tela. Algo para recordar, un detalle de color pero no menos importante, «tenemos que cuidar nuestras remeras». Ya que desde que nace la flor hasta que se convierte en la remera que llega a tu casa se consume mas de 4000 lts de agua mas el gasto de energía en los procesos de lavados…
            No te lo decimos para que no la laves, sino para que no las lavemos tan seguido….
            Manos Rebeldes/Manos Argentinas Oficial',
            'precio' => 7999.99,
            'imagen' => 'https://manosargentinas.com/tienda/wp-content/uploads/2021/07/D_986170-MLA46506537570_062021-F-1.jpg',
            'talles' => ['S', 'M', 'L']
        ]);
        DB::table('productos')->insert([
            'Id' => 2,
            'nombre' => 'Buzo Rebelde Friza Malvinas',
            'descripcion' => 'Buzo de Friza estampado de hombro adulto, manga ranglan, estampa en la espalda Reflex. ',
            'precio' => 20499.00,
            'imagen' => 'https://manosargentinas.com/tienda/wp-content/uploads/2021/07/D_785920-MLA46353293446_062021-F-1.jpg',
            'talles' => ['S', 'M', 'L', 'XL']
        ]);
        DB::table('productos')->insert([
            'Id' => 3,
            'nombre' => 'Remeras Rebeldes El Diego',
            'descripcion' => 'Talles Especiales Hombre adulto',
            'precio' => 7999.99,
            'imagen' => 'https://manosargentinas.com/tienda/wp-content/uploads/2023/03/D_605952-MLA54097567539_032023-F.jpg',
            'talles' => ['XL', 'XXL', 'XXXL']
        ]);
        DB::table('productos')->insert([
            'Id' => 4,
            'nombre' => 'Remeras Rebeldes Revolución',
            'descripcion' => 'Manga larga mujer',
            'precio' => 2584.56,
            'imagen' => 'https://manosargentinas.com/tienda/wp-content/uploads/2021/07/D_845574-MLA46650504197_072021-F.jpg',
            'talles' => ['XS','S','M','L','XL']
        ]);
        DB::table('productos')->insert([
            'Id' => 5,
            'nombre' => 'Remeras Rebeldes Escuela Pública E Inclusiva',
            'descripcion' => 'Remera manga corta mujer adulta',
            'precio' => 4500.00,
            'imagen' => 'https://manosargentinas.com/tienda/wp-content/uploads/2021/10/D_812230-MLA47680748818_092021-F.jpg',
            'talles' => ['XS','S','M','L']
        ]);
        DB::table('productos')->insert([
            'Id' => 6,
            'nombre' => 'Vestido Rebelde Wiphala Transformacion',
            'descripcion' => 'Vestido Rebelde manga corta 90 % Algodón y 10 % poliester.',
            'precio' => 14000,
            'imagen' => 'https://manosargentinas.com/tienda/wp-content/uploads/2022/12/D_666039-MLA52892124724_122022-F.jpg',
            'talles' => ['XS','S','M','L','XL']
        ]);
        DB::table('productos')->insert([
            'Id' => 7,
            'nombre' => 'Remeras Rebeldes Malvinas Full Estampa',
            'descripcion' => 'Remera manga corta hombre adulto',
            'precio' => 7999.99,
            'imagen' => 'https://manosargentinas.com/tienda/wp-content/uploads/2021/07/D_911823-MLA46641800996_072021-F.jpg',
            'talles' => ['S','M','L','XL']
        ]);
        DB::table('productos')->insert([
            'Id' => 8,
            'nombre' => 'Remeras Rebeldes Maestres',
            'descripcion' => 'Talles especiales hombre adulto',
            'precio' => 7999.99,
            'imagen' => 'https://manosargentinas.com/tienda/wp-content/uploads/2022/09/D_984282-MLA51427227874_092022-F.jpg',
            'talles' => ['XL', 'XXL', 'XXXL','XXXXL']
        ]);
        DB::table('productos')->insert([
            'Id' => 9,
            'nombre' => 'Remeras Rebeldes Argentina No Se Usa',
            'descripcion' => 'Remera manga corta hombre adulto',
            'precio' => 7999.99,
            'imagen' => 'https://manosargentinas.com/tienda/wp-content/uploads/2021/07/D_656387-MLA46405405357_062021-F-1.jpg',
            'talles' => ['S','M','L','XL']
        ]);
        DB::table('productos')->insert([
            'Id' => 10,
            'nombre' => 'Remeras Rebeldes Estrella Roja',
            'descripcion' => 'Manga larga con capucha mujer adulta',
            'precio' => 3699.00,
            'imagen' => 'https://manosargentinas.com/tienda/wp-content/uploads/2022/04/D_609800-MLA49720581595_042022-F.jpg',
            'talles' => ['XS','S','M','L','XL']
        ]);
    }
}
