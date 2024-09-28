
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista de admnin</title>
</head>
<body>

<h1>Vista de admin Index</h1>
<a href="admin/crear">Crear Nuevo</a>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Nombre</th>
                <th>Notas</th>
                <th>Notas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($notas as $valor){
            echo <<<FIN
            <tr>
                <td>$titulo</td>
                <td>$nombre</td>
                <td>$valor</td>
                <td>Actualizar</td>
             </tr>
            FIN;

        }

        ?>
        </tbody>
    </table>
</body>
</html>
