@extends('modelo-tela')

@section('corpo')
<section>
	<div class="container">
		<h1 class="tema">Alterar Notas</h1>
	</div>

	<div class="container">
		@if(count($errors->all()) > 0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $erro)
					<p>{{$erro}}</p>
				@endforeach
			</div>
		@endif
		<form method="get" action="/listar-notas/alterando/{{$nota->id_notas}}">
			<div class="form-group col-md-3">
				<label>Nota 1</label>
				<input class="form-control" type="number" name="nota_1" step="00.01" value="{{$nota->nota_1}}">
			</div>

			<div class="form-group col-md-3">
				<label>Nota 2</label>
				<input class="form-control" type="number" name="nota_2" step="00.01" value="{{$nota->nota_2}}">
			</div>

			<div class="form-group col-md-3">
				<label>Nota 3</label>
				<input class="form-control" type="number" name="nota_3" step="00.01" value="{{$nota->nota_3}}">
			</div>

			<div class="form-group col-md-3">
				<label>Nota 4</label>
				<input class="form-control" type="number" name="nota_4" step="00.01" value="{{$nota->nota_4}}">
			</div>

			<button class="btn btn-primary">Alterar</button>
		</form>
	</div>
</section>
@endsection