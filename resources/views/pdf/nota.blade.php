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
		<h1>Notas</h1>
		<table width="100%" border="1" cellspacing="0" cellpadding="10">
			<thead>
				
			</thead>
			<tbody>
				@foreach($notas as $nota)
					<tr>
						<td colspan="5">Aluno: {{$nota->nome_aluno}}</td>
					</tr>
					<tr>
						<td colspan="3">Professor: {{$nota->nome_professor}}</td>
						<td colspan="2">Curso: {{$nota->nome_curso}}</td>
					</tr>
					<tr>
						<td>Nota 1: {{$nota->nota_1}}</td>
						<td>Nota 2: {{$nota->nota_2}}</td>
						<td>Nota 3: {{$nota->nota_3}}</td>
						<td>Nota 4: {{$nota->nota_4}}</td>
						<td>Média: {{($nota->nota_1 + $nota->nota_2 + $nota->nota_3 + $nota->nota_4)/4}}</td>
					</tr>
					<tr>
						@if(($nota->nota_1 + $nota->nota_2 + $nota->nota_3 + $nota->nota_4)/4 > 8)
							<td colspan="5">Situação: Aprovado</td>
						@else
							<td colspan="5">Situação: Reprovado</td>
						@endif
					</tr>
				@endforeach
			</tbody>
		</table>
	</body>
</html>