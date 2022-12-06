<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::insert(
        [
            'name' => 'Administrador',
            'email' =>  'admin@admin.com',
            'telefone' => '993428983' ,
            'localidade' => 'Luanda',
            'data_de_nascimento' => '2000-03-20',
            'password' => Hash::make('12345'),
            'role' => 1,
        ]
        );
    }
}
