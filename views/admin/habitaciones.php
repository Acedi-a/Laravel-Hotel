<a href="propiedades/crear">Crear Nuevo</a>
<table class="">
    <thead>
    <tr>
        <th>Id habitacion</th>
        <th>Numero</th>
        <th>Id tipo</th>
        <th>Capacidad</th>
        <th>Precio por Noche</th>
        <th>Wifi</th>
        <th>Baño</th>
        <th>Tv</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($propiedad as $habitacion){ ?>
        <tr>
            <td><?php echo $habitacion['id_habitacion']; ?></td>
            <td><?php echo $habitacion['numero']; ?></td>
            <td><?php echo $habitacion['tipo_habitacion']; ?></td>
            <td><?php echo $habitacion['capacidad']; ?></td>
            <td><?php echo $habitacion['precio_por_noche']; ?></td>
            <td><?php echo $habitacion['wifi'] ? 'Sí' : 'No'; ?></td>
            <td><?php echo $habitacion['bano'] ? 'Sí' : 'No'; ?></td>
            <td><?php echo $habitacion['tv'] ? 'Sí' : 'No'; ?></td>
            <td><?php echo $habitacion['estado'] ? 'Disponible' : 'Ocupado'; ?></td>
            <td>
                <a href="propiedades/actualizar?id=<?php echo $habitacion['id_habitacion']; ?>">Actualizar</a>
                <form method="POST" action="propiedades/eliminar" style="display: inline;">
                    <input type="hidden" name="id" value="<?php echo $habitacion['id_habitacion']; ?>">
                    <button type="submit" onclick="return confirm('¿Estás seguro de que quieres eliminar esta habitación?')">Eliminar</button>
                </form>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>