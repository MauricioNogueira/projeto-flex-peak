<?php

use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aluno')->insert([
        	'nome_aluno' => 'Maurício Nogueira',
        	'data_nascimento' => '1995/01/24',
        	'logradouro' => 'Rua Eirunepé',
        	'numero' => '1040',
        	'bairro' => 'União',
        	'cidade' => 'Manacapuru',
        	'estado' => 'AM',
        	'data_criacao' => '2017/11/18',
        	'cep' => '69435083',
        ]);
    }
}
