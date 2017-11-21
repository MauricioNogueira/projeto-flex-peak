<?php

use Illuminate\Database\Seeder;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nota')->insert([
        	'id_curso' => 1,
        	'id_aluno' => 1,
        	'nota_1' => 10,
        	'nota_2' => 10,
        	'nota_3' => 10,
        	'nota_4' => 10,
        	'id_professor' => 2,
        	'data_criacao' => '2017/11/18',
        ]);

        DB::table('nota')->insert([
            'id_curso' => 3,
            'id_aluno' => 1,
            'nota_1' => 10,
            'nota_2' => 10,
            'nota_3' => 10,
            'nota_4' => 10,
            'id_professor' => 1,
            'data_criacao' => '2017/11/18',
        ]);
    }
}
