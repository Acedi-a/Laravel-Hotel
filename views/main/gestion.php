<?php 
?>
<div class="container mx-auto p-6 bg-gradient-to-r from-purple-50 to-indigo-50 rounded-xl shadow-lg">
    <div class="mb-8 text-center">
        <h1 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-indigo-600 mb-2">Panel de Reservas</h1>
        <p class="text-gray-600">Gestiona las reservas con facilidad</p>
    </div>

    <div class="flex justify-between items-center mb-6">
        <div class="flex space-x-2">


            <button class="bg-white text-indigo-600 px-6 py-3 rounded-full font-semibold shadow-md hover:bg-indigo-50 transition duration-300 ease-in-out">
                <i class="fas fa-filter mr-2"></i>Filtrar
            </button>
        </div>
        <div class="relative">
            <input type="text" placeholder="Buscar reservas..." class="pl-10 pr-4 py-2 rounded-full border-2 border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
        </div>
    </div>

    <div class="overflow-x-auto bg-white rounded-xl shadow-md">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
            <tr class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-center">ID Reserva</th>
                <th class="py-3 px-6 text-center">Habitación</th>
                <th class="py-3 px-6 text-center">Fecha Entrada</th>
                <th class="py-3 px-6 text-center">Fecha Salida</th>
                <th class="py-3 px-6 text-center">Estado</th>
                <th class="py-3 px-6 text-center">Acciones</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-sm">
            <?php foreach ($reservas as $reserva): ?>
                <tr class="text-lg border-b border-gray-200 hover:bg-gray-300 transition duration-150 ease-in-out">
                    <td class="py-3 px-6 text-center"><?= htmlspecialchars($reserva['id_reserva']) ?></td>
                    <td class="py-3 px-6 text-center"><?= htmlspecialchars($reserva['numero']) ?></td>
                    <td class="py-3 px-6 text-center"><?= htmlspecialchars($reserva['fecha_entrada']) ?></td>
                    <td class="py-3 px-6 text-center"><?= htmlspecialchars($reserva['fecha_salida']) ?></td>
                    <td class="py-3 px-6 text-center">
                        <?php
                        $colot_bg = "bg-green-200";
                        $texto = "Confirmada";
                        if (!$reserva['estado']){
                            $colot_bg = "bg-red-200";
                            $texto = "Cancelada";
                        }

                        echo <<<COSITA
                            <span class="$colot_bg  py-1 px-3 rounded-full text-md">
                               $texto
                            </span>
                        COSITA;

                        ?>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
<!--                            <a href="reservas/editar/--><?php //= htmlspecialchars($reserva['id_reserva']) ?><!--" class="h-10 mr-5 transform hover:text-purple-500 hover:scale-150 transition duration-300 ease-in-out">-->
<!--                                <i class="fas fa-edit fa-2x"></i>-->
<!--                            </a>-->
                            <a href="gestionar_cancelar?id=<?= htmlspecialchars($reserva['id_reserva']) ?>" class="w-6 mr-2 transform hover:text-red-500 hover:scale-110 transition duration-300 ease-in-out">
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