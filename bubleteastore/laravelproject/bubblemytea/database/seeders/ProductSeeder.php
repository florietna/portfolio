<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'thé oolong',
            'description' => 'Un thé qui en dit oolong !',
            'img_name' => 'theOlong',
            'price' => 6.00
        ]);

        DB::table('products')->insert([
            'name' => 'Thé vert',
            'description' => 'Simple et efficace.',
            'img_name' => 'theVert',
            'price' => 5.70
        ]);

        DB::table('products')->insert([
            'name' => 'Thé au melon d\'hiver',
            'description' => 'N\'allez pas voir son empreinte carbone',
            'img_name' => 'theMelon',
            'price' => 6.20
        ]);

        DB::table('products')->insert([
            'name' => 'Thé Ching',
            'description' => 'Oups, ça m\'a glissé des mains.',
            'img_name' => 'theChing',
            'price' => 5.70
        ]);

        DB::table('products')->insert([
            'name' => 'Thé noir.',
            'description' => 'Non, ce n\'est pas du pétrole.',
            'img_name' => 'theNoir',
            'price' => 5.70
        ]);
    }
}
