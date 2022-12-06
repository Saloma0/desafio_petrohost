<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         \App\Models\Categoria::insert([
            'name' => 'Tecnologia de informação',
            'user_id' => 1,
        ]);
         \App\Models\Categoria::insert([
            'name' => 'Contabilidade',
            'user_id' => 1,
        ]);
         \App\Models\Categoria::insert([
            'name' => 'Marketing',
            'user_id' => 1,
        ]);

    }
}
