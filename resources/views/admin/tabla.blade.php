<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Generacion de tabla</title>
  </head>
  <body>
    <h1>Tabla dinamica</h1>
    {{-- dd($datos) --}}
    <table width="80%" align="center" border="1">
    @for ($f=1; $f<=$datos['filas']; $f++)
      <tr>
        @for ($c=1;$c<=$datos['columnas']; $c++)
          <td>{{ $f }}, {{ $c }}</td>
        @endfor
      </tr>
    @endfor
  </table>
  </body>
</html>
