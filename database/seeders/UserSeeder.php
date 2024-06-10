<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Testing\Fluent\Concerns\Has;
use phpseclib3\Crypt\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'role_id'=>2,
            'first_name' => 'Manager',
            'last_name' => 'Asrorov',
            'email' => 'boburasrorov2005@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('B1234a1234'),
    ]);
        $user2 = User::create([
            'role_id'=>3,
            'first_name' => 'Admin',
            'last_name' => 'Urinbayeva',
            'email' => 'marjona.urinbayeva@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('Mysecretholder'),
        ]);

    }
}
