<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@iaw.com',
            'password' => Hash::make('admin123'),
            'email_verified_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'juan_perez',
            'email' => 'jperez@iaw.com',
            'password' => hash::make('12345')
        ]);
        DB::table('users')->insert([
            'name' => 'jorge_susvin',
            'email' => 'jsusvin@iaw.com',
            'password' => hash::make('54321')
        ]);
    }
}
