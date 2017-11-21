<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">

		<style type="text/css">
			h1{
				text-align: center;
			}
		</style>
	</head>
	<body>
		<h1>Alunos</h1>
		<table width="100%" border="1" cellspacing="0" cellpadding="10">
			<thead>
				
			</thead>
			<tbody>
				@foreach($alunos as $aluno)
					<tr>
						<td rowspan="3">{{$aluno->id_aluno}}</td>
						<td colspan="4">Nome: {{$aluno->nome_aluno}}</td>
					</tr>
					
					<tr>
						<td>CEP: {{$aluno->cep}}</td>
						<td >Logradouro: {{$aluno->logradouro}}</td>
						<td colspan="2">Data de nascimento: {{$aluno->data_nascimento}}</td>
					</tr>
					
					<tr>
						<td >Bairro: {{$aluno->bairro}}</td>
						<td >Cidade: {{$aluno->cidade}}</td>
						<td >Estado: {{$aluno->estado}}</td>
						<td >Número: {{$aluno->numero}}</td>
					</tr>
					
					
				@endforeach
			</tbody>
		</table>
	</body>
</html>