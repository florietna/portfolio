<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToppingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('toppings')->insert([
            'name' => 'Perles de tapioca',
            'description' => 'C\'est tout mou. On s\'étouffe quand on veut boire. Mais on aime ça quand même.',
            'price' => 0.60
        ]);

        DB::table('toppings')->insert([
            'name' => 'Mini perles de tapioca',
            'description' => 'Tout pareil que les perles de tapioca mais en plus petit.',
            'price' => 0.60
        ]);

        DB::table('toppings')->insert([
            'name' => 'Perles de Taro',
            'description' => 'Non, ce n\'est le jeu de carte.',
            'price' => 1.00
        ]);
    }
}
