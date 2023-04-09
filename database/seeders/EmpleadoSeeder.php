<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('empleados')->insert([
            'nombre_usuario' => 'juan_perez',
            'contrasena' => hash::make('12345')
        ]);
        DB::table('empleados')->insert([
            'nombre_usuario' => 'jorge_susvin',
            'contrasena' => hash::make('54321')
        ]);
    }
}
