@extends('modelo-tela')

@section('corpo')
<section>
	<div class="container">
		<h1 class="tema">Alunos</h1>
	</div>

	<div class="container">
		@if(session('alterado'))
			<strong><p class="alert alert-success">Aluno alterado com sucesso</p></strong>
		@endif

		@if(session('delete'))
			<strong><p class="alert alert-success">Aluno excluído com sucesso</p></strong>
		@endif
		<div class="table-responsive">
			<table class="table table-striper">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Data de nascimento</th>
						<th>CEP</th>
						<th>Logradouro</th>
						<th>Bairro</th>
						<th>Cidade</th>
						<th>Estado</th>
						<th>Número</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($alunos as $aluno)
						<tr>
							<td>{{$aluno->nome_aluno}}</td>
							<td>{{$aluno->data_nascimento}}</td>
							<td>{{$aluno->cep}}</td>
							<td>{{$aluno->logradouro}}</td>
							<td>{{$aluno->bairro}}</td>
							<td>{{$aluno->cidade}}</td>
							<td>{{$aluno->estado}}</td>
							<td>{{$aluno->numero}}</td>
							<td>
								<a class="btn btn-warning" href="/listar-aluno/alterar/{{$aluno->id_aluno}}">Alterar</a>
								<a class="btn btn-danger" href="/listar-aluno/excluir/{{$aluno->id_aluno}}">Excluir</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<a class="btn btn-info" target="_blank" href="/listar-aluno/gerar-pdf-aluno">Gerar PDF</a>
	</div>
</section>
@endsection