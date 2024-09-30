<h2>Actualizar Habitación</h2>

<form action="" method="POST" enctype="multipart/form-data">
    <div>
        <label for="numero">Número de Habitación:</label>
        <input type="text" id="numero" name="habitacion[numero]" value="<?php echo $habitacion->numero ?? ''; ?>">
    </div>

    <div>
        <label for="id_tipo">Tipo de Habitación:</label>
        <select id="id_tipo" name="habitacion[id_tipo]">
            <?php foreach($tipos_habitacion as $tipo): ?>
                <option value="<?php echo $tipo['id_tipo']; ?>" <?php echo ($habitacion->id_tipo == $tipo['id_tipo']) ? 'selected' : ''; ?>>
                    <?php echo $tipo['nombre']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label for="capacidad">Capacidad:</label>
        <input type="number" id="capacidad" name="habitacion[capacidad]" value="<?php echo $habitacion->capacidad; ?>">
    </div>

    <div>
        <label for="precio_por_noche">Precio por Noche:</label>
        <input type="number" id="precio_por_noche" name="habitacion[precio_por_noche]" value="<?php echo $habitacion->precio_por_noche; ?>">
    </div>

    <div>
        <label for="wifi">WiFi:</label>
        <input type="checkbox" id="wifi" name="habitacion[wifi]" <?php echo $habitacion->wifi ? 'checked' : ''; ?>>
    </div>

    <div>
        <label for="bano">Baño Privado:</label>
        <input type="checkbox" id="bano" name="habitacion[bano]" <?php echo $habitacion->bano ? 'checked' : ''; ?>>
    </div>

    <div>
        <label for="tv">TV:</label>
        <input type="checkbox" id="tv" name="habitacion[tv]" <?php echo $habitacion->tv ? 'checked' : ''; ?>>
    </div>

    <div>
        <label for="estado">Disponible:</label>
        <input type="checkbox" id="estado" name="habitacion[estado]" <?php echo $habitacion->estado ? 'checked' : ''; ?>>
    </div>

    <div>
        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="habitacion[foto]">
        <?php if($habitacion->foto): ?>
            <img src="/MVC/src/habitacion/<?php echo $habitacion->foto; ?>" alt="Imagen de la habitación" width="200">
        <?php endif; ?>
    </div>
    <input type="hidden" name="habitacion[id_habitacion]" value="<?php echo $habitacion->id_habitacion; ?>">
    <input type="submit" value="Actualizar Habitación">

</form>