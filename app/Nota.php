<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
	public $timestamps = false;

    protected $table = 'nota';
	    
    protected $fillable = [
        'id_curso',
        'id_aluno',
        'id_professor',
    	'nota_1',
    	'nota_2',
    	'nota_3',
    	'nota_4',
    ];
}
