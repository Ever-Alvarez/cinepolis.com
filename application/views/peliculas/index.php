<main>
    <div class="div-table">
        <div class="head-table">
            <button class="btn-Agregar">Agregar Pelicula</button>
        </div>
        <table cellpadding="0" cellspacing="0" border="1">
            <thead>
                <tr>
                    <th class="th-id" >#</th>
                    <th>Pelicula</th>
                    <th width=12% >Clasificacion</th>
                    <th width=8% >Año de Lanzamiento</th>
                    <th width=6% >Duración</th>
                    <th>Genero</th>
                    <th width=29% >Sinopsis</th>
                    <th>Director</th>
                    <th>Productora</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($peliculas as $key=>$value):?>
                    <tr>
                        <td><?php echo $value->id_pelicula;?></td>
                        <td><?php echo $value->titulo;?></td>
                        <td><?php echo $value->clasificacion;?></td>
                        <td><?php echo $value->anio_lanzamiento;?></td>
                        <td><?php echo $value->duracion;?></td>
                        <td><?php echo $value->genero;?></td>
                        <td><?php echo $value->sinopsis;?></td>
                        <td><?php echo $value->director;?> <?php echo $value->paterno;?></td>
                        <td><?php echo $value->productora;?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</main>
