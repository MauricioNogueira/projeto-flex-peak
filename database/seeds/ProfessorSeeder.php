<?php

use Illuminate\Database\Seeder;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professor')->insert([
        	'nome_professor' => 'Jaidson Brandão',
        	'data_nascimento' => '1985/05/24',
        	'id_curso' => 3,
        	'data_criacao' => '2017/11/18',
        ]);

        DB::table('professor')->insert([
        	'nome_professor' => 'Gabriel Leitão',
        	'data_nascimento' => '1989/09/24',
        	'id_curso' => 1,
        	'data_criacao' => '2017/11/18',
        ]);
    }
}
