<?php
    $tr = 0;
    $class;

    function formatoFecha($fecha) {
        $fecha = explode("-", $fecha);
        return "{$fecha[2]}-{$fecha[1]}-{$fecha[0]}";
    }

    function formatoProductora($productora) {
        $productora = explode(" ", $productora);

        for($i = 0; $i<count($productora); $i++) {
            if($i == 0)
                echo $productora[$i];
            else
                echo "<br>{$productora[$i]}";
        }
    }

    function formatoTitulo($titulo) {
        $titulo = explode(" ", $titulo);
        
        for($i = 0; $i<count($titulo); $i++) {
            if($i == 0 )
                echo $titulo[$i];
            else
                echo "<br>{$titulo[$i]}";
        }
    }

    function formatoHora($hora){
        $hora = explode(":", $hora);

        return "{$hora[0]}:{$hora[1]}";
    }

?>
<main>
    <div class="div-table">
        <div class="head-table">
            <button class="btn-Agregar">Agregar Pelicula</button>
        </div>
        <table cellpadding="0" cellspacing="0" border="1">
            <thead>
                <tr class="column-color-si-no">
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
                    <?php $tr = $tr + 1; ?>
                    <?php if($tr % 2 == 0):?>    
                            <tr class="column-color-si-no">
                    <?php else:?>
                        <tr>
                    <?php endif;?>
                        <td><?php echo $value->id_pelicula;?></td>
                        <!-- <td><?php //echo $value->titulo;?></td> -->
                        <td><?php echo formatoTitulo($value->titulo);?></td>
                        <td><?php echo $value->clasificacion;?></td>
                        <td><?php echo formatoFecha($value->anio_lanzamiento);?></td>
                        <td><?php echo formatoHora($value->duracion);?></td>
                        <td><?php echo $value->genero;?></td>
                        <td><?php echo $value->sinopsis;?></td>
                        <td><?php echo $value->director;?> <br> <?php echo $value->paterno;?></td>
                        <td><?php echo formatoProductora($value->productora);?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</main>
