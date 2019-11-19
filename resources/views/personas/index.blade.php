<!DOCTYPE html>
<html>
<head>
	<title>Lista de personas</title>
</head>
<body>
	<table border="1" align="center" width="80%">
		<tr>
			<th>Nro</th>
			<th>C.I.</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Telefono</th>
			<th>Direccion</th>
			<th>Fecha Nacimiento</th>
		</tr>
		<?php $i = 0; ?>
		@foreach ($personas as $persona)
		<tr>
			<td>{{ ++$i }}</td>
			<td>{{ $persona->ci }}</td>
			<td>{{ $persona->nombres }}</td>
			<td>{{ $persona->apellidos }}</td>
			<td>{{ $persona->telefono }}</td>
			<td>{{ $persona->direccion }}</td>
			<td>{{ $persona->fecha_nacimiento }}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>