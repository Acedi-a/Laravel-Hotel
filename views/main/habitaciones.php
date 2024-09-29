<div class="container mx-auto p-8 bg-white rounded-2xl shadow-2xl">
    <div class="mb-10 text-center">
        <h1 class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-teal-500 to-blue-500 mb-4">Habitaciones Disponibles</h1>
        <p class="text-lg text-gray-500">Elige la habitación perfecta para tu estancia</p>
    </div>

    <div class="flex justify-between items-center mb-10">
        <div class="flex space-x-3">

            <button class="bg-gray-100 text-teal-600 px-6 py-3 rounded-full font-semibold shadow-md hover:bg-gray-200 transition duration-300 ease-in-out">
                <i class="fas fa-filter mr-2"></i>Filtrar
            </button>
        </div>
        <div class="relative">
            <input type="text" placeholder="Buscar habitaciones..." class="pl-10 pr-4 py-2 rounded-full border-2 border-gray-300 focus:border-teal-500 focus:ring focus:ring-teal-200 focus:ring-opacity-50">
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php
        if (!empty($habitaciones) && is_array($habitaciones)) {
            foreach ($habitaciones as $habitacion):
                $estado = $habitacion['estado'] ? 'Disponible' : 'No disponible';
                $estadoClase = $habitacion['estado'] ? 'bg-green-200 text-green-700' : 'bg-red-200 text-red-700';
                ?>
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img src="<?= htmlspecialchars($habitacion['foto']) ?>" alt="Foto de la habitación" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-2"><?= htmlspecialchars($habitacion['nombre']) ?? 'Habitación' ?></h2>
                        <p class="text-gray-500 mb-4"><?= htmlspecialchars($habitacion['descripcion']) ?? 'Sin descripción' ?></p>
                        <div class="mb-4">
                            <p class="text-lg text-teal-600 font-semibold">Precio por Noche: $<?= htmlspecialchars($habitacion['precio_por_noche']) ?? 'N/A' ?></p>
                            <p class="text-sm text-gray-600">Capacidad: <?= htmlspecialchars($habitacion['capacidad']) ?? 'N/A' ?> personas</p>
                        </div>
                        <span class="<?= $estadoClase ?> py-1 px-3 rounded-full text-sm"><?= $estado ?></span>
                        <div class="mt-6">
                            <a href="/editar-habitacion?id=<?php echo $habitacion['id_habitacion']; ?>" class="bg-gradient-to-r from-teal-500 to-blue-500 text-white px-6 py-3 rounded-full font-semibold shadow-md hover:from-teal-600 hover:to-blue-600 transition duration-300 ease-in-out w-full block text-center">
                                Reservar Ahora
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php } else { ?>
            <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center text-gray-600 py-6">
                No hay habitaciones disponibles en este momento.
            </div>
        <?php } ?>
    </div>
</div>
