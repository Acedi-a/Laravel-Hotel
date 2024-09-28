
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Vista de Admin Index</h1>
    <a href="admin/crear" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Crear Nuevo</a>

    <div class="overflow-x-auto mt-6">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">ID</th>
                <th class="py-3 px-6 text-left">Nombre</th>
                <th class="py-3 px-6 text-left">Apellido</th>
                <th class="py-3 px-6 text-left">Email</th>
                <th class="py-3 px-6 text-left">Telefono</th>
                <th class="py-3 px-6 text-left">Contraseña</th>
                <th class="py-3 px-6 text-left">ID_TC</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
            <?php foreach ($clientes as $valor): ?>
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-center"><?= ($valor['id_cliente']) ?></td>
                    <td class="py-3 px-6 text-center"><?= ($valor['nombre']) ?></td>
                    <td class="py-3 px-6 text-center"><?= ($valor['apellido']) ?></td>
                    <td class="py-3 px-6 text-center"><?= ($valor['email']) ?></td>
                    <td class="py-3 px-6 text-center"><?= ($valor['telefono']) ?></td>
                    <td class="py-3 px-6 text-center"><?= ($valor['password']) ?></td>
                    <td class="py-3 px-6 text-center"><?= ($valor['id_tipo_cliente']) ?></td>
                    <td class="py-3 px-6 text-center">
<!--                        <a href="admin/editar/--><?php //= ($valor['id']) ?><!--" class="text-blue-500 hover:text-blue-700">Editar</a>-->
                        <!--                        <a href="admin/eliminar/--><?php //= ($valor['id']) ?><!--" class="text-red-500 hover:text-red-700 ml-4">Eliminar</a>-->
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
