<form method="post" enctype="multipart/form-data" class="max-w-lg mx-auto p-1 bg-white rounded-lg shadow-md">
    <h1 class="text-3xl font-bold text-center">Iniciar Sesión</h1>
    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="cliente[email]" class="mt-1 block w-full p-2 border border-gray-300 rounded-md
        focus:outline-none focus:ring focus:ring-blue-500" required>
    </div>

    <div class="mb-3">
        <label for="pass" class="block text-sm font-medium text-gray-700">Contraseña</label>
        <input type="password" name="cliente[password]" id="" class="mt-1 block w-full p-2 border border-gray-300
        rounded-md
        focus:outline-none focus:ring focus:ring-blue-500" required>
    </div>
    <div class="mb-4">
        <a href="register" class="text-blue-800">Eres cliente nuevo? Registrate aqui!</a>

    </div>

    <div class="flex justify-center items-center ">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none
    focus:shadow-outline m" type="submit">Entrar</button>
    </div>
</form>