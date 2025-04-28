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
            "nombre" => "Juan Pérez",
            "email" => "juan_perez@outlook.com",
            "contrasena" => Hash::make("12345"),
            "domicilio" => "Lomas de Santa Anita 353",
            "telefono" => '2915751627'
        ]);
        DB::table('clientes')->insert([
            "nombre" => "Frescura Ornelas",
            "email" => "local1925@live.com",
            "contrasena" => Hash::make("3)Rxkxhg"),
            "domicilio" => "El Edén 332",
            "telefono" => '2914627318'
        ]);
        DB::table('clientes')->insert([
            "nombre" => "Cristiano Cortés",
            "email" => "routines1981@protonmail.com",
            "contrasena" => Hash::make("l(Uo<e1,"),
            "domicilio" => "Ojo Zarco 932",
            "telefono" => "2915646216"
        ]);
        DB::table('clientes')->insert([
            "nombre" => "Arcadia Almaraz",
            "email" => "catalog2072@protonmail.com",
            "contrasena" => Hash::make("FD?Xeflk"),
            "domicilio" => "Jardines de las Fuentes 944",
            "telefono" => "2917673418"
        ]);

        DB::table('clientes')->insert([
            "nombre" => "Ezequiel Iglesias",
            "email" => "detected1803@yandex.com",
            "contrasena" => Hash::make("~{F2G)8="),
            "domicilio" => "Cima del Chapulín 803",
            "telefono" => "113211241"
        ]);

        DB::table('clientes')->insert([
            "nombre" => "Jovian Rojas",
            "email" => "needed1838@outlook.com",
            "contrasena" => Hash::make("BPlR%.3N"),
            "domicilio" => "Rancho El Potrerito 495",
            "telefono" => "2924531245"
        ]);

        DB::table('clientes')->insert([
            "nombre" => "Fonda Quiñónez",
            "email" => "almost1847@live.com",
            "contrasena" => Hash::make("^!SlEZOh"),
            "domicilio" => "Colinas de San Ignacio 1152",
            "telefono" => "115131245"
        ]);
        DB::table('clientes')->insert([
            "nombre" => "Alma Segovia",
            "email" => "ministry1927@outlook.com",
            "contrasena" => Hash::make("3|E9uQm]"),
            "domicilio" => "Residencial Santa Clara 543",
            "telefono" => "5261941497"
        ]);
        DB::table('clientes')->insert([
            "nombre" => "Anna Granado",
            "email" => "nicholas1897@protonmail.com",
            "contrasena" => Hash::make("VSw_P1rT"),
            "domicilio" => "Los Cedros 595",
            "telefono" => "1251458255"
        ]);
        DB::table('clientes')->insert([
            "nombre" => "Louis Gaona",
            "email" => "stephanie2046@protonmail.com",
            "contrasena" => "xB9^bH?^",
            "domicilio" => "El Encino 85",
            "telefono" => "1974973927"
        ]);
    }
}
