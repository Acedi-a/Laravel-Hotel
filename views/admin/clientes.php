<div class="container mx-auto p-6 bg-gradient-to-r from-purple-50 to-indigo-50 rounded-xl shadow-lg">
    <div class="mb-8 text-center">
        <h1 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-indigo-600 mb-2">Panel de Administración</h1>
        <p class="text-gray-600">Gestiona tus usuarios con facilidad</p>
    </div>

    <div class="flex justify-between items-center mb-6">
        <div class="flex space-x-2">
            <a href="admin/crear" style="text-decoration: none;" class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-3 rounded-full font-semibold shadow-md hover:from-purple-700 hover:to-indigo-700 transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                <i class="fas fa-plus-circle mr-2"></i>Crear Nuevo
            </a>

            <button class="bg-white text-indigo-600 px-6 py-3 rounded-full font-semibold shadow-md hover:bg-indigo-50 transition duration-300 ease-in-out">
                <i class="fas fa-filter mr-2"></i>Filtrar
            </button>
        </div>
        <div class="relative">
            <input type="text" placeholder="Buscar usuarios..." class="pl-10 pr-4 py-2 rounded-full border-2 border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
        </div>
    </div>

    <div class="overflow-x-auto bg-white rounded-xl shadow-md">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
            <tr class=" bg-gradient-to-r from-purple-600 to-indigo-600 text-white uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-center">ID</th>
                <th class="py-3 px-6 text-center">Nombre</th>
                <th class="py-3 px-6 text-center">Apellido</th>
                <th class="py-3 px-6 text-center">Email</th>
                <th class="py-3 px-6 text-center">Teléfono</th>
                <th class="py-3 px-6 text-center">Tipo usuario</th>
                <th class="py-3 px-6 text-center">Acciones</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-sm">
            <?php foreach ($clientes as $valor): ?>
                <tr class="text-lg border-b border-gray-200 hover:bg-gray-300 transition duration-150 ease-in-out">
                    <td class="py-3 px-6 text-center"><?= htmlspecialchars($valor['id_usuario']) ?></td>
                    <td class="py-3 px-6 text-center"><?= htmlspecialchars($valor['nombre']) ?></td>
                    <td class="py-3 px-6 text-center"><?= htmlspecialchars($valor['apellido']) ?></td>
                    <td class="py-3 px-6 text-center"><?= htmlspecialchars($valor['email']) ?></td>
                    <td class="py-3 px-6 text-center"><?= htmlspecialchars($valor['telefono']) ?></td>
                    <td class="py-3 px-6 text-center">
                            <span class="bg-green-200 text-green-700 py-1 px-3 rounded-full text-md">
                                <?= htmlspecialchars($valor['tipo_usuario']) ?>
                            </span>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                            <a href="clientes_eliminar?id=<?= htmlspecialchars($valor['id_usuario']) ?>" class="w-6 mr-2
                            transform
                            hover:text-red-500 hover:scale-110 transition duration-300 ease-in-out">
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