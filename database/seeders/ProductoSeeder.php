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
        // talles = 'XS,S,M,L,XL,XXL,XXXL,XXXXL,XXXXXL'


        DB::table('productos')->insert([
            'nombre' => 'Remeras Rebeldes San Martin Revolución',
            'descripcion' => 'Remera hombre adulto. Remera muuuyyyy Argentina 100% Algodón.
            Nuestras Remeras son y serán algo distinto en nuestra linea de producto, ya que es el único espacio que nos permite expresarnos de una forma valiente, certera y convincente de lo que sentimos,
            No siempre nos pasa que por medio de la ropa podamos decir, gritar y llorar así que esta fue la gran excusa para crear Manos Rebelde, tener este espacio de concientización humana verde y de alma transparente.
            Nuestros tejidos son hechos absolutamente en Argentina de títulos excelentes. Nuestras calidades son de 100% algodón peinado 24/1, telas que ya casi no se considera que tenga ningún tipo de encogimiento, aunque todos los algodones están expuestos (según el trato que le damos al lavarlo) a pequeños movimientos de la tela. Algo para recordar, un detalle de color pero no menos importante, «tenemos que cuidar nuestras remeras». Ya que desde que nace la flor hasta que se convierte en la remera que llega a tu casa se consume mas de 4000 lts de agua mas el gasto de energía en los procesos de lavados…
            No te lo decimos para que no la laves, sino para que no las lavemos tan seguido….
            Manos Rebeldes/Manos Argentinas Oficial',
            'precio' => 41500.00,
            'imagen' => 'https://res.cloudinary.com/drspuruy2/image/upload/v1736202779/products/m1ruavqpf4lfelgaazuk.jpg',
            'imagen_public_id' => 'products/m1ruavqpf4lfelgaazuk',
            'talles' => 'S,M,L',
            'categoria_id' => 1
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Buzo Rebelde Friza Malvinas',
            'descripcion' => 'Buzo de Friza estampado de hombro adulto, manga ranglan, estampa en la espalda Reflex. ',
            'precio' => 80000.00,
            'imagen' => 'https://res.cloudinary.com/drspuruy2/image/upload/v1736202766/products/wufxevdcry0nczzccv0n.jpg',
            'imagen_public_id' => 'products/wufxevdcry0nczzccv0n',
            'talles' => 'S,M,L,XL',
            'categoria_id' => 1
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Remeras Rebeldes El Diego',
            'descripcion' => 'Talles Especiales Hombre adulto',
            'precio' => 41500.00,
            'imagen' => 'https://res.cloudinary.com/drspuruy2/image/upload/v1736202770/products/nxndrnyjteatxpbotmul.jpg',
            'imagen_public_id' => 'products/nxndrnyjteatxpbotmul',
            'talles' => 'XL,XXL,XXXL',
            'categoria_id' => 1
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Vestido Rebelde Coronados de Gloria',
            'descripcion' => 'Vestido mujer manga corta',
            'precio' => 59000.00,
            'imagen' => 'https://res.cloudinary.com/drspuruy2/image/upload/v1736202779/products/pptxwe3bnxuea0q2lbub.jpg',
            'imagen_public_id' => 'products/pptxwe3bnxuea0q2lbub',
            'talles' => 'S,M,L,XL,XXXL',
            'categoria_id' => 2
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Remera Rebelde Mate',
            'descripcion' => 'Remera manga corta mujer adulta',
            'precio' => 41500.00,
            'imagen' => 'https://res.cloudinary.com/drspuruy2/image/upload/v1736202775/products/xiol7mhatgsk2ouqewlp.jpg',
            'imagen_public_id' => 'products/xiol7mhatgsk2ouqewlp',
            'talles' => 'XS,S,M,L',
            'categoria_id' => 2
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Vestido Rebelde Bombo legüero',
            'descripcion' => 'Vestido mujer manga corta',
            'precio' => 52500,
            'imagen' => 'https://res.cloudinary.com/drspuruy2/image/upload/v1736202780/products/hqwzvt2z1hkjycdarngj.jpg',
            'imagen_public_id' => 'products/hqwzvt2z1hkjycdarngj',
            'talles' => 'M,XL,XXL',
            'categoria_id' => 2
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Buzo rebelde Malvinas Full Estampa',
            'descripcion' => 'Buzo adulto unisex',
            'precio' => 80000,
            'imagen' => 'https://res.cloudinary.com/drspuruy2/image/upload/v1736202767/products/ainvbjycxetpyzdewp29.jpg',
            'imagen_public_id' => 'products/ainvbjycxetpyzdewp29',
            'talles' => 'S,M,L,XL',
            'categoria_id' => 3
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Remera Rebelde Atahualpa',
            'descripcion' => 'Remera Atahualpa Yupanqui para talles especiales',
            'precio' => 41500,
            'imagen' => 'https://res.cloudinary.com/drspuruy2/image/upload/v1736202769/products/mog1hs27kjoykt5ewyg8.jpg',
            'imagen_public_id' => 'products/mog1hs27kjoykt5ewyg8',
            'talles' => 'XL,XXL,XXXL,XXXXL',
            'categoria_id' => 3
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Remera Rebelde Instrumentos de vientos',
            'descripcion' => 'Remera manga corta adulto (molderia holgada)',
            'precio' => 41500,
            'imagen' => 'https://res.cloudinary.com/drspuruy2/image/upload/v1736202774/products/gsguywjd7j9y7l9gnyc5.jpg',
            'imagen_public_id' => 'products/gsguywjd7j9y7l9gnyc5',
            'talles' => 'S,M,L,XL,XXL',
            'categoria_id' => 3
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Remera Rebelde Güemes',
            'descripcion' => 'Remera manga corta',
            'precio' => 41500,
            'imagen' => 'https://res.cloudinary.com/drspuruy2/image/upload/v1736202772/products/jn534wj1wmqklcy8lkfl.jpg',
            'imagen_public_id' => 'products/jn534wj1wmqklcy8lkfl',
            'talles' => 'XS,S,M,L,XL',
            'categoria_id' => 1
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Remera Rebelde Leo',
            'descripcion' => 'Remera manga corta niñxs',
            'precio' => 32000,
            'imagen' => 'https://res.cloudinary.com/drspuruy2/image/upload/v1736202777/products/gtahluzp9zaeinwn2wdg.jpg',
            'imagen_public_id' => 'products/gtahluzp9zaeinwn2wdg',
            'talles' => 'XS,S',
            'categoria_id' => 4
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Remera Rebelde Escudo Nacional Argentino',
            'descripcion' => 'Remera manga corta niñxs',
            'precio' => 32000,
            'imagen' => 'https://res.cloudinary.com/drspuruy2/image/upload/v1736202771/products/xnwrgcezl1dcrtjrckq7.jpg',
            'imagen_public_id' => 'products/xnwrgcezl1dcrtjrckq7',
            'talles' => 'XS,S',
            'categoria_id' => 4
        ]);
    }
}