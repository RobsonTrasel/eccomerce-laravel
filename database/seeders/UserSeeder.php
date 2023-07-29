<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Administrador',
                'username' => 'adminuser',
                'email' => 'admin@admeccommerce.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Vendedor',
                'username' => 'vendoruser',
                'email' => 'vendor@vendoreccommerce.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Usuario',
                'username' => 'user',
                'email' => 'user@eccommerce.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('password')
            ]
        ]);
    }
}
