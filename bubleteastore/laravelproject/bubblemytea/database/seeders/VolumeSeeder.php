<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VolumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('volumes')->insert([
            'name' => 'Medium (500 mL)',
            'price' => 0.00
        ]);

        DB::table('volumes')->insert([
            'name' => 'Large (700 mL)',
            'price' => 1.00
        ]);
    }
}
