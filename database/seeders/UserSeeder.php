<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@etna.fr',
            'password' => Hash::make('admin'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'gestionnaire',
            'email' => 'manager@etna.fr',
            'password' => Hash::make('gestionnaire'),
            'role' => 'manager'
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@etna.fr',
            'password' => Hash::make('user'),
            'role' => 'user'
        ]);
    }
}
