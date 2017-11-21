<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota', function (Blueprint $table) {
            $table->increments('id_notas');
            $table->integer('id_curso')->unsigned();
            $table->foreign('id_curso')->references('id_curso')->on('curso')->onDelete('cascade');
            $table->integer('id_aluno')->unsigned();
            $table->foreign('id_aluno')->references('id_aluno')->on('aluno')->onDelete('cascade');
            $table->integer('id_professor')->unsigned();
            $table->foreign('id_professor')->references('id_professor')->on('professor')->onDelete('cascade');
            $table->decimal('nota_1', 5, 2);
            $table->decimal('nota_2', 5, 2);
            $table->decimal('nota_3', 5, 2);
            $table->decimal('nota_4', 5, 2);
            $table->date('data_criacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nota');
    }
}
