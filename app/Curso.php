<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
	public $timestamps = false;

	protected $table = 'curso';
	
    public function professor(){
    	return $this->hasOne('App/Professor');
    }

    protected $fillable = [
    	'nome_curso',
    ];
}
