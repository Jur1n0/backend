<?php

namespace Database\Seeders;

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
            [
                'first_name' => 'Pán',
                'last_name' => 'Admin',
                'email' => 'admin@ukf.sk',
                'password' => Hash::make('123'),
                'role' => 'admin',
                'premium_until' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Dávid',
                'last_name' => 'Držík',
                'email' => 'ddrzik@ukf.sk',
                'password' => Hash::make('456'),
                'role' => 'user',
                'premium_until' => now()->addDays(30),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Jozef',
                'last_name' => 'Kapusta',
                'email' => 'jkapusta@ukf.sk',
                'password' => Hash::make('789'),
                'role' => 'user',
                'premium_until' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Marek',
                'last_name' => 'Kaša',
                'email' => 'kasamarek@azet.sk',
                'password' => Hash::make('77302'),
                'role' => 'user',
                'premium_until' => now()->addDays(360),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Erika',
                'last_name' => 'Vlažná',
                'email' => 'vlaznaer@gmail.sk',
                'password' => Hash::make('78672833199'),
                'role' => 'user',
                'premium_until' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Matúš',
                'last_name' => 'Balko',
                'email' => 'balko007@gmail.sk',
                'password' => Hash::make('002723'),
                'role' => 'user',
                'premium_until' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Matej',
                'last_name' => 'Petrík',
                'email' => '00petrik00@gmail.sk',
                'password' => Hash::make('6327519864268'),
                'role' => 'user',
                'premium_until' => now()->addDays(189),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Jaroslava',
                'last_name' => 'Pilná',
                'email' => 'jarkajarinka@gmail.sk',
                'password' => Hash::make('8988856465364667855867'),
                'role' => 'user',
                'premium_until' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
