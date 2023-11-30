<div class="div-table">
    <table cellpadding="0" cellspacing="0" border="1" align="center">
        <thead>
            <tr>
                <th>#</th>
                <th>Pelicula</th>
                <th>Clasificacion</th>
                <th>Año de Lanzamiento</th>
                <th>Duración</th>
                <th>Genero</th>
                <th>Sinopsis</th>
                <th>Director</th>
                <th>Productora</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($peliculas as $key=>$value):?>
                <tr>
                    <td><?php echo $value->id;?></td>
                    <td><?php echo $value->titulo;?></td>
                    <td><?php echo $value->clasificacion;?></td>
                    <td><?php echo $value->anio_de_lanzamiento;?></td>
                    <td><?php echo $value->duracion;?></td>
                    <td><?php echo $value->genero;?></td>
                    <td><?php echo $value->sinopsis;?></td>
                    <td><?php echo $value->director;?></td>
                    <td><?php echo $value->productora;?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
