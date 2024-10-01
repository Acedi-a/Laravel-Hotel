<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Habitación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .form-check-input:checked {
            background-color: #28a745;
            border-color: #28a745;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container p-5">
                <h2 class="text-center mb-4">Actualizar Habitación</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="habitacion[id_habitacion]" value="<?php echo $habitacion['id_habitacion']; ?>">

                    <div class="mb-3">
                        <label for="numero" class="form-label">Número de Habitación:</label>
                        <input type="text" class="form-control" id="numero" name="habitacion[numero]" value="<?php echo $habitacion['numero'] ?? ''; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="id_tipo" class="form-label">Tipo de Habitación:</label>
                        <select class="form-select" id="id_tipo" name="habitacion[id_tipo]" required>
                            <option value="">Seleccione un tipo</option>
                            <?php foreach ($tipos_habitacion as $tipo) : ?>
                                <option value="<?php echo htmlspecialchars($tipo['id_tipo']); ?>" <?php echo ($habitacion['id_tipo'] == $tipo['id_tipo']) ? 'selected' : ''; ?>>
                                    <?php echo htmlspecialchars($tipo['nombre']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="capacidad" class="form-label">Capacidad:</label>
                        <input type="number" class="form-control" id="capacidad" name="habitacion[capacidad]" value="<?php echo $habitacion['capacidad'] ?? ''; ?>" min="1" required>
                    </div>

                    <div class="mb-3">
                        <label for="precio_por_noche" class="form-label">Precio por Noche:</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="number" class="form-control" id="precio_por_noche" name="habitacion[precio_por_noche]" step="0.01" min="0" value="<?php echo $habitacion['precio_por_noche'] ?? ''; ?>" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Características:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="wifi" name="habitacion[wifi]" value="1" <?php echo ($habitacion['wifi'] == 1) ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="wifi">
                                <i class="fas fa-wifi me-2"></i>WiFi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="bano" name="habitacion[bano]" value="1" <?php echo ($habitacion['bano'] == 1) ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="bano">
                                <i class="fas fa-bath me-2"></i>Baño Privado
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="tv" name="habitacion[tv]" value="1" <?php echo ($habitacion['tv'] == 1) ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="tv">
                                <i class="fas fa-tv me-2"></i>TV
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado:</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="estado" name="habitacion[estado]" value="1" <?php echo ($habitacion['estado'] == 1) ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="estado">Disponible</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto:</label>
                        <input type="file" class="form-control" id="foto" name="habitacion[foto]" accept="image/*">
                        <?php if (!empty($habitacion['foto'])) : ?>
                            <p class="mt-2">Imagen actual: <?php echo basename($habitacion['foto']); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-save me-2"></i>Guardar Cambios
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>