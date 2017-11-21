<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequestCurso;
use Illuminate\Support\Facades\DB;
use App\Curso;

class ControleCurso extends Controller
{
	public function telaCadastrar_curso() {
    	return view('curso.cadastrar-curso');
    }
    
    public function cadastrar_curso(FormRequestCurso $request){
    	$data = date('Y/m/d');
    	$parametro = $request->all();

    	$curso = new Curso($parametro);
    	$curso->data_criacao = $data;

    	$curso->save();

    	return redirect('/cadastrar-curso')->with('sucesso', '1');
    }

    public function tela_lista_curso(){
        $cursos = Curso::orderBy('nome_curso')->get();

        return view('curso.tela-lista-cursos')->with('cursos', $cursos);
    }

    public function tela_altera_curso($id){
        $curso = Curso::where('id_curso', $id)->first();
        //dd($curso);

        return view('curso.tela-altera-curso')->with('curso', $curso);
    }

    public function alterar(FormRequestCurso $request, $id){
        //dd($request->all());
        DB::update('update curso set nome_curso = ? where id_curso = ?', [$request->nome_curso, $id]);

        return redirect('/listar-curso')->with('alterado', '1');
    }

    public function excluir($id){
        //dd($id);
        DB::table('nota')->where('id_curso', $id)->delete();
        DB::table('curso')->where('id_curso', $id)->delete();

        return redirect('/listar-curso')->with('delete', '1');
    }

    public function gerar_pdf_curso(){
        $cursos = Curso::orderBy('nome_curso')->get();
        //dd($cursos);

        $pdf = \PDF::loadView('pdf.curso', compact('cursos'))->stream();

        return $pdf;
    }
}
