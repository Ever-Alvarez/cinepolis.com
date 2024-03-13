<?php
    $tr = 0;

    function formatoFecha($fecha) {
        $fecha = explode("-", $fecha);

        return "{$fecha[2]}-{$fecha[1]}-{$fecha[0]}";
    }
?>
<main>
    <div class="div-table">
        <div class="head-table">
            <button class="btn-Agregar">Agregar Director</button>
        </div>
        <table cellpadding="0" cellspacing="0" border="1" align="center">
            <thead>
                <tr class="column-color-si-no">
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($directores as $key=>$value):?>
                    <?php $tr = $tr + 1; ?>
                    <?php if($tr % 2 == 0):?>    
                        <tr class="column-color-si-no">
                    <?php else:?>
                        <tr>
                    <?php endif;?>
                        <td><?php echo $value->id_director;?></td>
                        <td><?php echo $value->nombre.' '.$value->paterno;?></td>
                        <td><?php echo formatoFecha($value->fecha_nacimiento);?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</main>