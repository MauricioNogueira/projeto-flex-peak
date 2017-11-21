<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequestProfessor;
use App\Http\Requests\FormAlteraProfessor;
use Illuminate\Support\Facades\DB;
use App\Professor;
use App\Curso;

class ControleProfessor extends Controller
{
    public function telaCadastrar_professor(){
        $cursos = Curso::all();
        
        return view('professor.cadastrar-professor')->with('cursos', $cursos);
    }

    public function tela_alterar($id, $id_curso){
        $professor = Professor::where(['id_professor' => $id, 'id_curso' => $id_curso])->first();
        $cursos = Curso::all();
        //dd($professor);

        return view('professor.alterar-professor')->with(['prof' => $professor, 'cursos' => $cursos]);
    }

    public function cadastrar(FormRequestProfessor $request){
    	$data = date('Y/m/d');

    	$parametros = $request->all();
    	$professor = new Professor($parametros);
    	$professor->data_criacao = $data;

    	$professor->save();

    	return redirect('/cadastrar-professor')->with('sucesso', '1');
    }

    public function alterar(FormAlteraProfessor $request, $id){
        //dd($request->all());
        DB::update('update professor set nome_professor = ?, data_nascimento = ? where id_professor = ?', [$request->nome_professor, $request->data_nascimento,  $id]);

        return redirect('/listar-professor')->with('alterado', '1');
    }

    public function excluir($id, $id_curso){
        $professor = Professor::where('id_professor', $id)->first();
        //dd($professor);
        DB::table('professor')->where('id_professor', '=', $id)->delete();

        return redirect('/listar-professor')->with('delete', '1');
    }

    public function lista_professores(){
        $professor = DB::table('professor')->join('curso', 'curso.id_curso', '=', 'professor.id_curso')->select('professor.nome_professor', 'professor.data_nascimento', 'curso.nome_curso', 'professor.id_professor', 'curso.id_curso')->orderBy('professor.nome_professor')->get();
        //dd($professor);
        
        return view('professor.listar-professor')->with('professores', $professor);
    }

    public function gerar_pdf(){
    	$professores = DB::table('professor')->join('curso', 'curso.id_curso', '=', 'professor.id_curso')->select('professor.nome_professor', 'professor.data_nascimento', 'curso.nome_curso')->orderBy('professor.nome_professor')->get();


    	$pdf = \PDF::loadView('pdf.professor', compact('professores'))->stream();

    	return $pdf;
    }
}
