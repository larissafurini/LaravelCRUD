<?php

use Illuminate\Database\Seeder;
use App\Mensagem;

class mensagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensagem::create([
            'titulo' => 'Olá',
            'texto' => 'Say Hi',
            'autor' => 'Larissa'
            'user_id' => 1;
            'atividade_id' => 1;
        ]);

        Mensagem::create([
            'titulo' => 'Olá',
            'texto' => 'Say Bye',
            'autor' => 'Fernanda'
            'user_id' => 1;
            'atividade_id' => 1;
        ]);
    }
}
