<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	AlunoSeeder::class,
        	CursoSeeder::class,
        	ProfessorSeeder::class,
        	NotaSeeder::class,
        ]);
    }
}
