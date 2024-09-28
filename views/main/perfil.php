<div class="container mx-auto mt-10 p-8 bg-white shadow-lg rounded-lg">
    <h2 class="text-3xl font-semibold mb-6 text-gray-800 border-b-2 border-gray-200 pb-3">Información del Cliente</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <!-- Nombre -->
        <div>
            <label class="block text-gray-600 font-bold mb-2">Nombre</label>
            <div class="text-lg bg-gray-100 px-4 py-2 rounded-md border border-gray-300">
                <?php echo ($cliente['nombre']); ?>
            </div>
        </div>

        <!-- Apellido -->
        <div>
            <label class="block text-gray-600 font-bold mb-2">Apellido</label>
            <div class="text-lg bg-gray-100 px-4 py-2 rounded-md border border-gray-300">
                <?php echo ($cliente['apellido']); ?>
            </div>
        </div>

        <!-- Email -->
        <div>
            <label class="block text-gray-600 font-bold mb-2">Email</label>
            <div class="text-lg bg-gray-100 px-4 py-2 rounded-md border border-gray-300">
                <?php echo ($cliente['email']); ?>
            </div>
        </div>

        <!-- Teléfono -->
        <div>
            <label class="block text-gray-600 font-bold mb-2">Teléfono</label>
            <div class="text-lg bg-gray-100 px-4 py-2 rounded-md border border-gray-300">
                <?php echo ($cliente['telefono']); ?>
            </div>
        </div>

        <div>
            <label class="block text-gray-600 font-bold mb-2">Tipo de Cliente</label>
            <div class="text-lg bg-gray-100 px-4 py-2 rounded-md border border-gray-300">
                <?php echo ($cliente['tipo_usuario']); ?>
            </div>
        </div>

        <div>
            <label class="block text-gray-600 font-bold mb-2">Contraseña</label>
            <div class="text-lg bg-gray-100 px-4 py-2 rounded-md border border-gray-300">
                ********
            </div>
        </div>
    </div>

    <!-- Botón de Editar -->
    <div class="flex justify-end">
        <a href="#" class="bg-blue-500 text-white px-6 py-2 rounded-md
        hover:bg-blue-600 transition duration-300">Editar Información</a>
    </div>
</div>
