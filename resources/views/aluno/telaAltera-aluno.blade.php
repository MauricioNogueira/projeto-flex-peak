@extends('modelo-tela')

@section('corpo')
<section>
	<div class="container">
		<h1 class="tema">Alterar Aluno</h1>
	</div>

	<div class="container" style="margin-bottom: 40px;">
		<form method="get" action="/listar-aluno/alterando/{{$aluno->id_aluno}}">
			@if(count($errors->all()) > 0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $erro)
						<p>{{$erro}}</p>
					@endforeach
				</div>
			@endif
			<div class="row">
				<fieldset>
					<legend>Dados pessoais</legend>
					<div class="form-group col-md-8">
						<label for="cNome">Nome Completo</label>
						<input class="form-control" type="text" name="nome_aluno" id="cNome" value="{{$aluno->nome_aluno}}">
					</div>

					<div class="form-group col-md-4">
						<label for="cData">Data de Nascimento</label>
						<input class="form-control" type="date" name="data_nascimento" id="cData"  value="{{$aluno->data_nascimento}}">
					</div>
				</fieldset>
				<fieldset>
					<legend>Endereço</legend>
					<div class="form-group col-md-4">
						<label for="cCep">CEP</label>
						<input class="form-control" type="text" name="cep" id="cCep" value="{{$aluno->cep}}">
					</div>

					<div class="form-group col-md-4">
						<label for="cLogradouro">Logradouro</label>
						<input class="form-control" type="text" name="logradouro" id="cLogradouro" value="{{$aluno->logradouro}}">
					</div>

					<div class="form-group col-md-4">
						<label for="cBairro">Bairro</label>
						<input class="form-control" type="text" name="bairro" id="cBairro" value="{{$aluno->bairro}}">
					</div>

					<div class="form-group col-md-4">
						<label for="cCidade">Cidade</label>
						<input class="form-control" type="text" name="cidade" id="cCidade" value="{{$aluno->cidade}}">
					</div>

					<div class="form-group col-md-4">
						<label for="cEstado">Estado</label>
						<input class="form-control" type="text" name="estado" id="cEstado" value="{{$aluno->estado}}">
					</div>

					<div class="form-group col-md-2">
						<label for="cNumero">Número da Residência</label>
						<input class="form-control" type="text" name="numero" id="cNumero" value="{{$aluno->numero}}">
					</div>
				</fieldset>
			</div>

			<button class="btn btn-primary">Alterar</button>
		</form>
	</div>
</section>
@endsection