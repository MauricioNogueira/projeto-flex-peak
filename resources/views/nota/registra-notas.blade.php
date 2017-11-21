@extends('modelo-tela')

@section('corpo')
<section>
	<div class="container">
		<h1 class="tema">Registrar Notas</h1>
	</div>

	<div class="container">
		@if(session('sucesso'))
			<strong><p class="alert alert-success">Notas registradas</p></strong>
		@endif
		
		@if(count($errors->all()) > 0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $erro)
					<p>{{$erro}}</p>
				@endforeach
			</div>
		@endif
		<form method="post" action="/registrar-notas/registrar">
			{{csrf_field()}}
			<div class="row">
				<div class="form-group col-md-4">
					<label>Cursos</label>
					<select class="form-control" name="id_curso">
						<option disabled="true" selected="true">Escolha</option>
						@foreach($cursos as $curso)
							<option value="{{$curso->id_curso}}">{{$curso->nome_curso}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group col-md-4">
					<label>Alunos</label>
					<select class="form-control" name="id_aluno">
						<option disabled="true" selected="true">Escolha</option>
						@foreach($alunos as $aluno)
							<option value="{{$aluno->id_aluno}}">{{$aluno->nome_aluno}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group col-md-4">
					<label>Professores</label>
					<select class="form-control" name="id_professor">
						<option disabled="true" selected="true">Escolha</option>
						@foreach($professores as $professor)
							<option value="{{$professor->id_professor}}">{{$professor->nome_professor}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group col-md-3">
					<label>Nota 1</label>
					<input class="form-control" type="number" name="nota_1" step="00.01" value="{{old('nota_1')}}">
				</div>

				<div class="form-group col-md-3">
					<label>Nota 2</label>
					<input class="form-control" type="number" name="nota_2" step="00.01" value="{{old('nota_2')}}">
				</div>

				<div class="form-group col-md-3">
					<label>Nota 3</label>
					<input class="form-control" type="number" name="nota_3" step="00.01" value="{{old('nota_3')}}">
				</div>

				<div class="form-group col-md-3">
					<label>Nota 4</label>
					<input class="form-control" type="number" name="nota_4" step="00.01" value="{{old('nota_4')}}">
				</div>
			</div>

			<button class="btn btn-primary">Registrar</button>
		</form>
	</div>
</section>
@endsection