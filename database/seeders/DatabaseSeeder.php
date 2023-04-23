<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            EmpleadoSeeder::class,
            CategoriaSeeder::class,
            ProductoSeeder::class,
            ClienteSeeder::class,
            ComprasSeeder::class,
            DetalleOrdenSeeder::class,
            ProductoCategoriaSeeder::class,
            UserSeeder::class
        ]);
    }
}
