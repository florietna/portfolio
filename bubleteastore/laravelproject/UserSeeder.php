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
            'firstname' => 'root',
            'lastname' => 'root',
            'email' => 'rootmail@gmail.com',
            'password' => Hash::make('rootpassword')
        ]);

        DB::table('users')->insert([
            'firstname' => 'Michel',
            'lastname' => 'Test',
            'email' => 'test_m@gmail.com',
            'password' => Hash::make('1234')
        ]);
    }
}
