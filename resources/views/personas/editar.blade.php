<!DOCTYPE html>
<html>
<head>
	<title>Editar Persona</title>
</head>
<body>
<h2>Editar Persona</h2>


{{ Form::open(['route'=>'persona.actualizar', 'method'=>'post'])}}

		C.I.: {{ Form::number('ci', $persona->ci, ['required'=>'true', 'placeholder'=>'Introduzca C.I.', 'disabled']) }}<br>

		{{ Form::label('nombres', 'Nombres: ') }}
		{{ Form::text('nombres', $persona->nombres, ['id'=>'nombres']) }}<br>

		{{ Form::label('apellidos', 'Apellidos: ') }}
		{{ Form::text('apellidos', $persona->apellidos, ['id'=>'apellidos']) }}<br>
			

		{{ Form::label('direccion', 'Direccion: ') }}
		{{ Form::text('direccion', $persona->direccion, ['id'=>'direccion']) }}<br>

		Telefono: {{ Form::number('telefono', $persona->telefono, ['required'=>'true', 'placeholder'=>'Introduzca numero de telefono.']) }}<br>

		Fecha: {{ $persona->fecha_nacimiento }}<br>

		{{Form::hidden('id', $persona->id)}}

		{{ Form::submit('Guardar') }}
		{{ Form::reset('Borrar') }}

</body>
</html>