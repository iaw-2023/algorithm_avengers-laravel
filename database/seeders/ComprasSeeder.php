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
            'precio' => 86997.96,
            'fecha' => date("Y-m-d"),
            'email_cliente' => "juan_perez@outlook.com"
        ]);
    }
}
