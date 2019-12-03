<!DOCTYPE html>
<html>
<head>
	<title>Nueva Persona</title>
</head>
<body>
	<h2>Persona Nueva</h2>
	{{ Form::open(['route'=>'persona.crear', 'method'=>'post']) }}
		
		C.I.: {{ Form::number('ci', '', ['required'=>'true', 'placeholder'=>'Introduzca C.I.']) }}<br>

		{{ Form::label('nombres', 'Nombres: ') }}
		{{ Form::text('nombres', '', ['id'=>'nombres']) }}<br>

		{{ Form::label('apellidos', 'Apellidos: ') }}
		{{ Form::text('apellidos', '', ['id'=>'apellidos']) }}<br>
			

		{{ Form::label('direccion', 'Direccion: ') }}
		{{ Form::text('direccion', '', ['id'=>'direccion']) }}<br>

		Telefono: {{ Form::number('telefono', '', ['required'=>'true', 'placeholder'=>'Introduzca numero de telefono.']) }}<br>

		Fecha: {{ Form::date('fecha_nacimiento') }}<br>

		{{ Form::submit('Guardar') }}
		{{ Form::reset('Borrar') }}


	{{ Form::close() }}
</body>
</html>