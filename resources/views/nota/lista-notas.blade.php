@extends('modelo-tela')

@section('corpo')
<section>
	<div class="container">
		<h1 class="tema">Notas</h1>
	</div>

	<div class="container">
		@if(session('alterado'))
			<strong><p class="alert alert-success">Nota(s) alterada(s) com sucesso</p></strong>
		@endif

		@if(session('delete'))
			<strong><p class="alert alert-success">Nota(s) excluída(s) com sucesso</p></strong>
		@endif
		<div class="table-responsive">
			<table class="table table-striper">
				<thead>
					<tr>
						<th>Professor</th>
						<th>Aluno</th>
						<th>Curso</th>
						<th>Nota 1</th>
						<th>Nota 2</th>
						<th>Nota 3</th>
						<th>Nota 4</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($notas as $nota)
						<tr>
							<td>{{$nota->nome_professor}}</td>
							<td>{{$nota->nome_aluno}}</td>
							<td>{{$nota->nome_curso}}</td>
							<td>{{$nota->nota_1}}</td>
							<td>{{$nota->nota_2}}</td>
							<td>{{$nota->nota_3}}</td>
							<td>{{$nota->nota_4}}</td>
							<td>
								<a class="btn btn-warning" href="/listar-notas/alterar/{{$nota->id_notas}}">Alterar</a>
								<a class="btn btn-danger" href="/listar-notas/excluir/{{$nota->id_notas}}">Excluir</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<a class="btn btn-info" target="_blank" href="/listar-notas/gerar-pdf-notas">Gerar PDF</a>
	</div>
</section>
@endsection