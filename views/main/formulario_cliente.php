<fieldset>
    <div class="mb-4">
        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
        <input type="text" name="cliente[nombre]" id="nombre" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" required>
    </div>

    <div class="mb-4">
        <label for="apellido" class="block text-sm font-medium text-gray-700">Apellido</label>
        <input type="text" name="cliente[apellido]" id="apellido" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" required>
    </div>

    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="cliente[email]" id="email" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" required>
    </div>

    <div class="mb-4">
        <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
        <input type="text" name="cliente[telefono]" id="telefono" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" required>
    </div>

    <div class="mb-4">
        <label for="pass" class="block text-sm font-medium text-gray-700">Contraseña</label>
        <input type="password" name="cliente[password]" id="pass" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" required minlength="4" maxlength="16">
    </div>

    <div class="mb-4">
        <label class="block text-lg font-medium text-gray-800 mb-3">Nivel de membresía</label>
        <div class="d-flex flex-wrap gap-3">
            <div class="card border-0 shadow-sm hover-effect" style="width: 18rem;">
                <div class="card-body">
                    <label class="form-check-label d-flex align-items-center">
                        <input type="radio" name="cliente[nivel_membresia]" value="estandar" class="form-check-input me-2">
                        <div>
                            <h5 class="card-title mb-1">Estándar</h5>
                            <p class="card-text text-muted mb-0">Acceso básico a las instalaciones del hotel</p>
                        </div>
                    </label>
                </div>
            </div>
            <div class="card border-0 shadow-sm hover-effect" style="width: 18rem;">
                <div class="card-body">
                    <label class="form-check-label d-flex align-items-center">
                        <input type="radio" name="cliente[nivel_membresia]" value="premium" class="form-check-input me-2">
                        <div>
                            <h5 class="card-title mb-1">Premium</h5>
                            <p class="card-text text-muted mb-0">Beneficios estándar + Descuentos especiales</p>
                        </div>
                    </label>
                </div>
            </div>
            <div class="card border-0 shadow-sm hover-effect" style="width: 18rem;">
                <div class="card-body">
                    <label class="form-check-label d-flex align-items-center">
                        <input type="radio" name="cliente[nivel_membresia]" value="elite" class="form-check-input me-2">
                        <div>
                            <h5 class="card-title mb-1">Elite</h5>
                            <p class="card-text text-muted mb-0">Beneficios premium + Acceso a eventos exclusivos</p>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <style>
        .hover-effect {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-effect:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .hover-effect:hover .card-body {
            background-color: #f0f0f0;
        }

        .form-check-input:checked + div .card-title {
            color: #007bff;
        }
    </style>


</fieldset>