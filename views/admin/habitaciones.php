<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Habitaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f8;
            color: #333;
        }
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .btn-custom {
            background-color: #4a90e2;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #3476c5;
        }
        .feature-icon {
            font-size: 1.2rem;
            margin-right: 0.5rem;
        }
        .badge-custom {
            font-size: 0.8rem;
            padding: 0.3rem 0.6rem;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-5">Gestión de Habitaciones</h1>

    <a href="habitacionesCrear" class="btn btn-custom mb-4">
        <i class="fas fa-plus-circle"></i> Crear Nueva Habitación
    </a>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach ($propiedad as $habitacion){ ?>
            <?php $rutaImagen = "/MVC/src/habitacion/{$habitacion['foto']}"; ?>
            <div class="col">
                <div class="card h-100">
                    <img src="<?php echo $rutaImagen; ?>" class="card-img-top" alt="Foto de la habitación" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Habitación <?php echo $habitacion['numero']; ?></h5>
                        <p class="card-text">
                            <span class="badge bg-info badge-custom"><?php echo $habitacion['nombre']; ?></span>
                            <span class="badge <?php echo $habitacion['estado'] ? 'bg-success' : 'bg-danger'; ?> badge-custom"><?php echo $habitacion['estado'] ? 'Disponible' : 'Ocupado'; ?></span>
                        </p>
                        <p class="card-text">
                            <i class="fas fa-user feature-icon"></i> Capacidad: <?php echo $habitacion['capacidad']; ?><br>
                            <i class="fas fa-dollar-sign feature-icon"></i> Precio: $<?php echo number_format($habitacion['precio_por_noche'], 2); ?>/noche
                        </p>
                        <p class="card-text">
                            <i class="fas fa-wifi feature-icon <?php echo $habitacion['wifi'] ? 'text-success' : 'text-muted'; ?>"></i> WiFi
                            <i class="fas fa-bath feature-icon <?php echo $habitacion['bano'] ? 'text-success' : 'text-muted'; ?>"></i> Baño
                            <i class="fas fa-tv feature-icon <?php echo $habitacion['tv'] ? 'text-success' : 'text-muted'; ?>"></i> TV
                        </p>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <a href="/MVC/public/index.php/admin/habitacionesActualizar?id=<?php echo $habitacion['id_habitacion']; ?>" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Editar
                        </a>
<!--                        <form method="POST" action="propiedades/eliminar" class="d-inline">-->
<!--                            <input type="hidden" name="id" value="--><?php //echo $habitacion['id_habitacion']; ?><!--">-->
<!--                            <button type="submit" class="btn btn-danger btn-sm">-->
<!--                                <i class="fas fa-trash-alt"></i> Eliminar-->
<!--                            </button>-->
<!--                        </form>-->
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</body>
</html>