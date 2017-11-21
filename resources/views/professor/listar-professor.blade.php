@extends('modelo-tela')

@section('corpo')
<section>
	<div class="container">
		<h1 class="tema">Professores</h1>
	</div>

	<div class="container">
		@if(session('delete'))
			<strong><p class="alert alert-success">Professor excluído</p></strong>
		@endif
		@if(session('alterado'))
			<strong><p class="alert alert-success">Professor alterado com sucesso</p></strong>
		@endif
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Curso</th>
						<th>Data de nascimento</th>
						<th>Ações</th>
					</tr>
				</thead>

				<tbody>
					@foreach($professores as $professor)
					<tr>
						<td>{{$professor->nome_professor}}</td>
						<td>{{$professor->nome_curso}}</td>
						<td>{{$professor->data_nascimento}}</td>
						<td>
							<a href="/listar-professor/alterar/{{$professor->id_professor}}/{{$professor->id_curso}}" class="btn btn-warning">Alterar</a>
							<a href="/listar-professor/excluir/{{$professor->id_professor}}/{{$professor->id_curso}}" class="btn btn-danger">Excluir</a>
						</td>
					</tr>	
					@endforeach
					
				</tbody>
			</table>
			<a href="/listar-professor/pdf" class="btn btn-info" target="_blank">Gerar PDF</a>
		</div>
	</div>
</section>
@endsection