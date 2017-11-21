<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequestNota;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FormAlteraNota;
use App\Nota;
use App\Curso;
use App\Professor;
use App\Aluno;

class ControleNota extends Controller
{
    public function telaRegistrar_notas(){
        $cursos = Curso::all();
        $alunos = Aluno::all();
        $professor = Professor::all();

        return view('nota.registra-notas')->with(['cursos' => $cursos, 'alunos' => $alunos, 'professores' => $professor]);
    }

    public function tela_listagem_nota(){
        $notas = $this->array_notas();
        //dd($notas);
        return view('nota.lista-notas')->with('notas', $notas);
    }

    public function tela_alterar_nota($id){
        $nota = Nota::where('id_notas', $id)->first();

        return view('nota.tela-alterar-nota')->with('nota', $nota);
    }

    public function alterar(FormAlteraNota $request, $id){
        //dd($request->all());
        DB::update('update nota set nota_1 = ?, nota_2 = ?, nota_3 = ?, nota_4 = ? where id_notas = ?', [$request->nota_1, $request->nota_2, $request->nota_3, $request->nota_4, $id]);

        return redirect('/listar-notas')->with('alterado', '1');
    }

    public function excluir($id){
        DB::table('nota')->where('id_notas', $id)->delete();

        return redirect('/listar-notas')->with('delete', '1');
    }

    public function registrar_notas(FormRequestNota $request){
    	$parametros = $request->all();
    	$data = date('Y/m/d');
    	
    	$notas = new Nota($parametros);

    	$notas->data_criacao = $data;
        //dd($parametros);
    	$notas->save();
    	

    	return redirect('/registrar-notas')->with('sucesso', '1');
    }

    public function gerar_pdf_notas(){
        $notas = $this->array_notas();
        //dd($notas);

        $pdf = \PDF::loadView('pdf.nota', compact('notas'))->stream();

        return $pdf;
    }

    public function array_notas(){
        return DB::table('nota')->join('curso', 'curso.id_curso', '=', 'nota.id_curso')->join('professor', 'professor.id_professor', '=', 'nota.id_professor')->join('aluno', 'aluno.id_aluno', '=', 'nota.id_aluno')->select('aluno.nome_aluno', 'professor.nome_professor', 'curso.nome_curso', 'nota.nota_1', 'nota.nota_2', 'nota.nota_3', 'nota.nota_4', 'nota.id_notas')->orderBy('aluno.nome_aluno')->get();
    }
}
