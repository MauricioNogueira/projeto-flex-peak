@extends('modelo-tela')

@section('corpo')
<section>
	<div class="container">
		<h1 class="tema">Cadastrar Curso</h1>
	</div>

	<div class="container">
		@if(session('sucesso'))
			<strong><p class="alert alert-success">Curso cadastrado com sucesso</p></strong>
		@endif
		@if(count($errors->all()) > 0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $erro)
					<p>{{$erro}}</p>
				@endforeach
			</div>
		@endif
		<form method="post" action="/cadastrar-curso/cadastrar">
			{{csrf_field()}}
			<div class="form-group">
				<label for="cCurso">Curso</label>
				<input class="form-control" type="text" name="nome_curso" id="cCurso" value="{{old('nome_curso')}}">
			</div>

			<button class="btn btn-primary">Cadastrar</button>
		</form>
	</div>
</section>
@endsection