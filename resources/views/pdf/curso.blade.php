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
		<h1>Cursos</h1>
		<table width="100%" border="1" cellspacing="0" cellpadding="10">
			<thead>
				<tr>
					<th>Curso</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cursos as $curso)
					<tr>
						<td>{{$curso->nome_curso}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</body>
</html>