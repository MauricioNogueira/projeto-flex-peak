<?php

use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('curso')->insert([
        	'nome_curso' => 'Linguagem de Programação I',
        	'data_criacao' => '2017/11/18',
        ]);

        DB::table('curso')->insert([
        	'nome_curso' => 'Linguagem de Programação II',
        	'data_criacao' => '2017/11/18',
        ]);

        DB::table('curso')->insert([
        	'nome_curso' => 'Estrutura de Dados I',
        	'data_criacao' => '2017/11/18',
        ]);
    }
}
