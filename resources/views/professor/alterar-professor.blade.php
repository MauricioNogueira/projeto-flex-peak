@extends('modelo-tela')

@section('corpo')
<section>
	<div class="container">
		<h1 class="tema">Alterar Professor</h1>
	</div>

	<div class="container">
		
		@if(count($errors->all()) > 0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $erro)
					<p>{{$erro}}</p>
				@endforeach
			</div>
		@endif

		<form method="get" action="/listar-professor/alterando/{{$prof->id_professor}}">
			<div class="row">
				<div class="form-group col-md-8">
					<label for="cProfessor">Nome Completo</label>
					<input class="form-control" type="text" name="nome_professor" id="cProfessor" value="{{$prof->nome_professor}}">
				</div>

				<div class="form-group col-md-4">
					<label for="cNascimento">Data de nascimento</label>
					<input class="form-control" type="date" name="data_nascimento" id="cNascimento" value="{{$prof->data_nascimento}}">
				</div>

				
			</div>

			<button class="btn btn-primary">Alterar</button>
		</form>
	</div>
</section>
@endsection