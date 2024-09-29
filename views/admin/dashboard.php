<div class="bg-purple-50 p-6 rounded-lg shadow-lg">
    <h1 class="text-3xl font-bold text-purple-800 mb-6">Dashboard del Hotel</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-xl font-semibold text-purple-700 mb-2">Usuarios Registrados</h2>
            <p class="text-4xl font-bold text-purple-900">1,234</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-xl font-semibold text-purple-700 mb-2">Habitaciones Disponibles</h2>
            <p class="text-4xl font-bold text-purple-900">42</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-xl font-semibold text-purple-700 mb-2">Reservas Activas</h2>
            <p class="text-4xl font-bold text-purple-900">78</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-xl font-semibold text-purple-700 mb-2">Ingresos del Mes</h2>
            <p class="text-4xl font-bold text-purple-900">$52,750</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-2xl font-semibold text-purple-800 mb-4">Últimas Reservas</h2>
            <table class="w-full">
                <thead>
                <tr class="bg-purple-100">
                    <th class="py-2 px-4 text-left">Usuario</th>
                    <th class="py-2 px-4 text-left">Habitación</th>
                    <th class="py-2 px-4 text-left">Entrada</th>
                    <th class="py-2 px-4 text-left">Salida</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b">
                    <td class="py-2 px-4">Juan Pérez</td>
                    <td class="py-2 px-4">201</td>
                    <td class="py-2 px-4">2024-09-30</td>
                    <td class="py-2 px-4">2024-10-05</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4">María García</td>
                    <td class="py-2 px-4">305</td>
                    <td class="py-2 px-4">2024-10-01</td>
                    <td class="py-2 px-4">2024-10-03</td>
                </tr>
                <tr>
                    <td class="py-2 px-4">Carlos López</td>
                    <td class="py-2 px-4">102</td>
                    <td class="py-2 px-4">2024-10-02</td>
                    <td class="py-2 px-4">2024-10-07</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-2xl font-semibold text-purple-800 mb-4">Tipos de Habitación</h2>
            <ul class="space-y-4">
                <li class="flex justify-between items-center">
                    <span class="text-purple-700 font-semibold">Individual</span>
                    <span class="bg-purple-100 text-purple-800 py-1 px-3 rounded-full">25 disponibles</span>
                </li>
                <li class="flex justify-between items-center">
                    <span class="text-purple-700 font-semibold">Doble</span>
                    <span class="bg-purple-100 text-purple-800 py-1 px-3 rounded-full">15 disponibles</span>
                </li>
                <li class="flex justify-between items-center">
                    <span class="text-purple-700 font-semibold">Suite</span>
                    <span class="bg-purple-100 text-purple-800 py-1 px-3 rounded-full">2 disponibles</span>
                </li>
            </ul>
        </div>
    </div>
</div>