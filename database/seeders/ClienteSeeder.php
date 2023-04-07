<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            'email' => Str::random(10) . '@gmail.com',
            'contrasena' => Hash::make('password'),
            'nombre' => Str::Random(25),
            'telefono' => Str::Random(15),
            'domicilio' => Str::Random(50)

        ]);
    }
}
