<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequestAluno;
use Illuminate\Support\Facades\DB;
use App\Aluno;

class ControleAluno extends Controller
{
    public function verifica_cep(){
    	$cep = $_GET['cep'];

    	$endereco = file_get_contents('https://viacep.com.br/ws/'.$cep.'/json/');

    	$endereco = json_encode($endereco);

    	return $endereco;
    }

    public function telaCadastrar_aluno(){
        return view('aluno.cadastrar-aluno');
    }

    public function cadastrar_aluno(FormRequestAluno $request){
    	$params = $request->all();
    	$data = date('Y/m/d');
    	$aluno = new Aluno($params);
    	$aluno->data_criacao = $data;
    	$aluno->save();

    	return redirect('/cadastrar-aluno')->with('sucesso', '1');
    }

    public function telaListar_aluno(){
        $alunos = Aluno::all();

        return view('aluno.lista-aluno')->with('alunos', $alunos);
    }

    public function tela_alterar($id){
        $aluno = Aluno::where('id_aluno', $id)->first();
        //dd($aluno);
        return view('aluno.telaAltera-aluno')->with('aluno', $aluno);
    }

    public function alterar(FormRequestAluno $request, $id){
        DB::update('update aluno set nome_aluno = ?, data_nascimento = ?, cep = ?, logradouro = ?, bairro = ?, cidade = ?, estado = ?, numero = ? where id_aluno = ?',[$request->nome_aluno, $request->data_nascimento, $request->cep, $request->logradouro, $request->bairro, $request->cidade, $request->estado, $request->numero, $id]);

        return redirect('/listar-aluno')->with('alterado', '1');
    }

    public function excluir($id){
        DB::table('aluno')->where('id_aluno', '=', $id)->delete();

        return redirect('/listar-aluno')->with('delete', '1');
    }

    public function gerar_pdf_aluno(){
        $alunos = Aluno::orderBy('nome_aluno')->get();

        $pdf = \PDF::loadView('pdf.aluno', compact('alunos'))->stream();

        return $pdf;
    }
}