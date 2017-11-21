<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControleTela extends Controller
{
    public function home(){
    	return view('home');
    }
}
