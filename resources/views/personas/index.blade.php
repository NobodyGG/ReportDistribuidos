<!DOCTYPE html>
<html>
<head>
	<title>Lista de personas</title>
</head>
<body>
<h2>Lista de personas</h2>
	<a href="{{ route('persona.nueva') }}">Nuevo</a>
	<table border="1" align="center" width="80%">
		<tr>
			<th>Nro</th>
			<th>C.I.</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Telefono</th>
			<th>Direccion</th>
			<th>Fecha Nacimiento</th>
			<th>Opciones</th>
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
			<td>
				<a href="persona/editar/{{ $persona->id }}">Editar</a> | 
				<a href="persona/eliminar/{{ $persona->id }}">Eliminar</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>