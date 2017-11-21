@extends('modelo-tela')

@section('corpo')
<section>
	<div class="container">
		<h1 class="tema">Cursos</h1>
	</div>

	<div class="container">
		@if(session('alterado'))
			<strong><p class="alert alert-success">Curso alterado com sucesso</p></strong>
		@endif

		@if(session('delete'))
			<strong><p class="alert alert-success">Curso excluído com sucesso</p></strong>
		@endif
		<div class="table-responsive">
			<table class="table table-striper">
				<thead>
					<tr>
						<th>Curso</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($cursos as $curso)
						<tr>
							<td>{{$curso->nome_curso}}</td>
							<td>
								<a class="btn btn-warning" href="/listar-curso/alterar/{{$curso->id_curso}}">Alterar</a>
								<a class="btn btn-danger" href="/listar-curso/excluir/{{$curso->id_curso}}">Excluir</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<a class="btn btn-info" target="_blank" href="/listar-cursos/gerar-pdf-curso">Gerar PDF</a>
	</div>
</section>
@endsection