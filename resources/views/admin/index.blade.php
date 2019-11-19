<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index de Administracion</title>
  </head>
  <body>
    <h1>Lista de administradores</h1>
    <table border="1" width="80%" align="center">
    @for ($i=1; $i<=10; $i++)
        <tr>
            <td>{{ $i }}</td>
            <td>col 2</td>
            <td>col 3</td>
        </tr>
    @endfor
    </table>
  </body>
</html>
