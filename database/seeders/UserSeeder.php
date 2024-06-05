<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'name' => 'John Doe',
                'email' => 'john@gmail.com',
                'password' => Hash::make('anjay123'),
                'role_id' => 2, // 2 for 'user', 1 for 'admin
                'api_key' => '123456789',
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('anjay123'),
                'role_id' => 1,
                'api_key' => '123456798',
            ],
        ];

         //insert data
         foreach ($data as $item) {
            User::create([
                'name' => $item['name'],
                'email' => $item['email'],
                'password' => $item['password'],
                'role_id' => $item['role_id'],
                'api_key' => $item['api_key'],
            ]);
        }
    }
}
