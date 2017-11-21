<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professor', function (Blueprint $table) {
            $table->increments('id_professor');
            $table->string('nome_professor');
            $table->date('data_nascimento');
            $table->integer('id_curso')->unsigned();
            $table->foreign('id_curso')->references('id_curso')->on('curso')->onDelete('cascade');
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
        Schema::dropIfExists('professor');
    }
}
