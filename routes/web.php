<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ControleTela@home');
Route::get('/verifica-cep', 'ControleAluno@verifica_cep');

/*Aluno*/
Route::get('/cadastrar-aluno', 'ControleAluno@telaCadastrar_aluno');
Route::post('/cadastrar-aluno/cadastrar', 'ControleAluno@cadastrar_aluno');
Route::get('/listar-aluno', 'ControleAluno@telaListar_aluno');
Route::get('/listar-aluno/alterar/{id}', 'ControleAluno@tela_alterar');
Route::get('/listar-aluno/alterando/{id}', 'ControleAluno@alterar');
Route::get('/listar-aluno/excluir/{id}', 'ControleAluno@excluir');
Route::get('/listar-aluno/gerar-pdf-aluno', 'ControleAluno@gerar_pdf_aluno');

/*Curso*/
Route::get('/cadastrar-curso', 'ControleCurso@telaCadastrar_curso');
Route::post('/cadastrar-curso/cadastrar', 'ControleCurso@cadastrar_curso');
Route::get('/listar-curso', 'ControleCurso@tela_lista_curso');
Route::get('/listar-curso/alterar/{id}', 'ControleCurso@tela_altera_curso');
Route::get('/listar-curso/alterando/{id}', 'ControleCurso@alterar');
Route::get('/listar-curso/excluir/{id}', 'ControleCurso@excluir');
Route::get('/listar-cursos/gerar-pdf-curso', 'ControleCurso@gerar_pdf_curso');

/*Professor*/
Route::get('/cadastrar-professor', 'ControleProfessor@telaCadastrar_professor');
Route::get('/listar-professor', 'ControleProfessor@lista_professores');
Route::post('/cadastrar-professor/cadastrar', 'ControleProfessor@cadastrar');
Route::get('/listar-professor/pdf', 'ControleProfessor@gerar_pdf');
Route::get('/listar-professor/alterar/{id}/{idCurso}', 'ControleProfessor@tela_alterar');
Route::get('/listar-professor/alterando/{id}', 'ControleProfessor@alterar');
Route::get('/listar-professor/excluir/{id}/{idCurso}', 'ControleProfessor@excluir');

/*Nota*/
Route::get('/registrar-notas', 'ControleNota@telaRegistrar_notas');
Route::get('/listar-notas', 'ControleNota@tela_listagem_nota');
Route::get('/listar-notas/alterar/{id}', 'ControleNota@tela_alterar_nota');
Route::get('/listar-notas/alterando/{id}', 'ControleNota@alterar');
Route::get('/listar-notas/excluir/{id}', 'ControleNota@excluir');
Route::post('/registrar-notas/registrar', 'ControleNota@registrar_notas');
Route::get('/listar-notas/gerar-pdf-notas', 'ControleNota@gerar_pdf_notas');