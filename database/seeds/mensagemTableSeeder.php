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
        ]);

        Mensagem::create([
            'titulo' => 'Olá',
            'texto' => 'Say Bye',
            'autor' => 'Fernanda'
        ]);
    }
}
