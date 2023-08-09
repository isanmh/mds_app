<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);
        // add role admin
        $admin->assignRole('admin');

        $operator = User::create([
            'name' => 'operator',
            'email' => 'operator@gmail.com',
            'password' => bcrypt('operator123'),
        ]);
        $operator->assignRole('operator');

        $sales = User::create([
            'name' => 'sales',
            'email' => 'sales@gmail.com',
            'password' => bcrypt('sales123'),
        ]);
        $sales->assignRole('sales');
    }
}
