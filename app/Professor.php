<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
	public $timestamps = false;

	public function nota(){
    	return $this->hasMany('App/Nota');
    }

    protected $table = 'professor';

    protected $fillable = [
    	'nome_professor',
    	'data_nascimento',
    	'id_curso',
    ];
}
