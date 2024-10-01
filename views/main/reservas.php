<?php
if (!isset($_SESSION['id_usuario'])){
    header('location:login');
    exit;
}
else $id_usuario = $_SESSION['id_usuario'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Reserva</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans p-8">

    <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold mb-4">Reservar Habitación N° <?php echo htmlspecialchars($habitacion['numero']); ?></h1>

        <img src="<?php echo htmlspecialchars($habitacion['foto']); ?>" alt="Foto de la Habitación" class="w-full h-48 object-cover rounded-t-lg mb-4">

        <div class="mb-4">
            <p class="text-gray-700">Capacidad: <?php echo htmlspecialchars($habitacion['capacidad']); ?> personas</p>
            <p class="text-gray-700">Precio por Noche: $<?php echo htmlspecialchars($habitacion['precio_por_noche']); ?></p>
            <p class="text-gray-700">Servicios:
                <?php 
                    echo $habitacion['wifi'] ? 'WiFi, ' : '';
                    echo $habitacion['bano'] ? 'Baño Privado, ' : '';
                    echo $habitacion['tv'] ? 'Televisión' : '';
                ?>
            </p>
        </div>

        <form action="" method="POST" class="space-y-4">
            <input type="hidden" name="reserva[id_usuario]" value="<?php echo htmlspecialchars($id_usuario); ?>">
            <input type="hidden" name="reserva[id_habitacion]" value="<?php echo htmlspecialchars($habitacion['id_habitacion']); ?>">

            <div>
                <label for="fecha_entrada" class="block text-sm font-medium text-gray-700">Fecha de Entrada:</label>
                <input type="date" id="fecha_entrada" name="reserva[fecha_entrada]" required class="mt-1 p-2 w-full border rounded-md shadow-sm focus:ring focus:ring-blue-300 focus:border-blue-300">
            </div>

            <div>
                <label for="fecha_salida" class="block text-sm font-medium text-gray-700">Fecha de Salida:</label>
                <input type="date" id="fecha_salida" name="reserva[fecha_salida]" required class="mt-1 p-2 w-full border rounded-md shadow-sm focus:ring focus:ring-blue-300 focus:border-blue-300">
            </div>

            <div>
                <label for="estado" class="block text-sm font-medium text-gray-700">Estado de la Reserva:</label>
                <select id="estado" name="reserva[estado]" required class="mt-1 p-2 w-full border rounded-md shadow-sm focus:ring focus:ring-blue-300 focus:border-blue-300">
                    <option value="1">Confirmada</option>
                    <option value="0">Cancelada</option>
                </select>
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Reservar</button>
        </form>
    </div>

</body>
</html>
