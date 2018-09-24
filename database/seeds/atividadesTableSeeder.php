<?php

use Illuminate\Database\Seeder;
use App\Atividade;

class atividadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Atividade::create([
            'title' => 'Trabalho de Banco de dados',
            'description' => 'apresentar o sistema de uma determinada empresa',
            'scheduledto' => '2018-05-05 10:30:00'
            'user_id' => 1
        ]);

        Atividade::create([
            'title' => 'Prova de Quimica',
            'description' => 'Sobre quimica organica e suas funcoes',
            'scheduledto' => '2018-06-09 11:20:00'
            'user-id' =>1       
        ]);


    }
}
