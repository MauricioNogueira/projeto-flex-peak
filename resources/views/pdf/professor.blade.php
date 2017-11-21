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
		<h1>Professores</h1>
		<table width="100%" border="1" cellspacing="0" cellpadding="10">
			<thead>
				<tr>
					<th>Nome completo</th>
					<th>Curso</th>
					<th>Data de nascimento</th>
				</tr>
			</thead>
			<tbody>
				@foreach($professores as $professor)
					<tr>
						<td>{{$professor->nome_professor}}</td>
						<td>{{$professor->nome_curso}}</td>
						<td>{{$professor->data_nascimento}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</body>
</html>