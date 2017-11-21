@extends('modelo-tela')

@section('corpo')
<section>
	<div class="container">
		<h1 class="tema">Cadastrar Professor</h1>
	</div>

	<div class="container">
		@if(session('sucesso'))
			<strong><p class="alert alert-success">Professor cadastrado com sucesso</p></strong>
		@endif
		@if(count($errors->all()) > 0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $erro)
					<p>{{$erro}}</p>
				@endforeach
			</div>
		@endif
		<form method="post" action="/cadastrar-professor/cadastrar">
			{{csrf_field()}}
			<div class="row">
				<div class="form-group col-md-8">
					<label for="cProfessor">Nome Completo</label>
					<input class="form-control" type="text" name="nome_professor" id="cProfessor" value="{{old('nome_professor')}}">
				</div>

				<div class="form-group col-md-4">
					<label for="cNascimento">Data de nascimento</label>
					<input class="form-control" type="date" name="data_nascimento" id="cNascimento" value="{{old('data_nascimento')}}">
				</div>

				<div class="form-group col-md-4">
					<label for="cNascimento">Curso</label>
					<select class="form-control" name="id_curso">
						<option disabled="true" selected="true">Selecione...</option>
						@foreach($cursos as $curso)
							<option value="{{$curso->id_curso}}">{{$curso->nome_curso}}</option>
						@endforeach
					</select>
				</div>
			</div>

			<button class="btn btn-primary">Cadastrar</button>
		</form>
	</div>
</section>
@endsection