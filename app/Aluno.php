<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public function notas(){
    	return $this->hasMany('App/Nota');
    }

    public $timestamps = false;

    protected $table = 'aluno';

    protected $fillable = [
    	'nome_aluno',
    	'data_nascimento',
    	'logradouro',
    	'numero',
    	'bairro',
    	'cidade',
    	'estado',
    	'cep',
    ];
}
