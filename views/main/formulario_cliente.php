<fieldset>
    <div class="mb-4">
        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
        <input type="text" name="cliente[nombre]" id="" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" required>
    </div>

    <div class="mb-4">
        <label for="apellido" class="block text-sm font-medium text-gray-700">Apellido</label>
        <input type="text" name="cliente[apellido]" id="" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" required>
    </div>

    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="cliente[email]" id="" class="mt-1 block w-full p-2 border border-gray-300
        rounded-md focus:outline-none focus:ring focus:ring-blue-500" required>
    </div>

    <div class="mb-4">
        <label for="telefono" class="block text-sm font-medium text-gray-700">Telefono</label>
        <input type="text" name="cliente[telefono]" id="" class="mt-1 block w-full p-2 border border-gray-300
            rounded-md focus:outline-none focus:ring focus:ring-blue-500" required>
    </div>

    <div class="mb-4">
        <label for="pass" class="block text-sm font-medium text-gray-700">Contraseña</label>
        <input type="password" name="cliente[password]" id="" class="mt-1 block w-full p-2 border border-gray-300
            rounded-md focus:outline-none focus:ring focus:ring-blue-500" required min=4 max=16>
    </div>

    <div class="mb-4">
        <label>Tipo de cliente</label><br>
        <label class="mr-5"><input type="radio" name="cliente[tipo_cliente]" value="Normal"> Normal</label>
        <label class="mr-5"><input type="radio" name="cliente[tipo_cliente]" value="Premium"> Premium</label>
        <label class="mr-5"><input type="radio" name="cliente[tipo_cliente]" value="VIP"> VIP</label>
    </div>
</fieldset>
