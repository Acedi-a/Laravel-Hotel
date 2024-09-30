<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - Tipos de Habitación</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-r from-purple-50 to-indigo-50">
<div class="container mx-auto p-6">
    <div class="mb-8 text-center">
        <h1 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-indigo-600 mb-2">Panel de Administración</h1>
        <p class="text-gray-600">Gestiona tus tipos de habitación con facilidad</p>
    </div>

    <div class="flex justify-between items-center mb-6">
        <div class="flex space-x-2">
            <a href="tipos_habitacion/crear" class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-3 rounded-full font-semibold shadow-md hover:from-purple-700 hover:to-indigo-700 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                <i class="fas fa-plus-circle mr-2"></i>Crear Nuevo
            </a>

        </div>
        <div class="relative">
            <input type="text" placeholder="Buscar tipos..." class="pl-10 pr-4 py-2 rounded-full border-2 border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
        </div>
    </div>

    <div class="overflow-x-auto bg-white rounded-xl shadow-md">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
            <tr class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-center">ID</th>
                <th class="py-3 px-6 text-center">Nombre</th>
                <th class="py-3 px-6 text-center">Descripción</th>
                <th class="py-3 px-6 text-center">Acciones</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-sm">
            <?php foreach ($tiposHabitacion as $tipo): ?>
                <tr class="text-lg border-b border-gray-200 hover:bg-gray-300 transition duration-150 ease-in-out">
                    <td class="py-3 px-6 text-center"><?= htmlspecialchars($tipo['id_tipo']) ?></td>
                    <td class="py-3 px-6 text-center"><?= htmlspecialchars($tipo['nombre']) ?></td>
                    <td class="py-3 px-6 text-center"><?= htmlspecialchars($tipo['descripcion']) ?></td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                            <a href="tipos_habitacion/actualizar/<?= htmlspecialchars($tipo['id_tipo']) ?>" class="h-10 mr-5 transform hover:text-purple-500 hover:scale-150 transition duration-300 ease-in-out">
                                <i class="fas fa-edit fa-2x"></i>
                            </a>
                            <a href="tipos_habitacion/eliminar/<?= htmlspecialchars($tipo['id_tipo']) ?>" class="w-6 mr-2 transform hover:text-red-500 hover:scale-110 transition duration-300 ease-in-out" onclick="return confirm('¿Estás seguro de que quieres eliminar este tipo de habitación?')">
                                <i class="fas fa-trash-alt fa-2x"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>