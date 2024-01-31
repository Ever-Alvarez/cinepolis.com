<?php
    $tr = 0;
?>
<main>
    <div class="div-table">
        <div class="head-table">
            <button class="btn-Agregar">Agregar Actor</button>
        </div>
        <table cellpadding="0" cellspacing="0" border="1">
            <thead>
                <tr class="column-color-si-no">
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($actores as $key=>$value):?>
                    <?php $tr = $tr + 1; ?>
                    <?php if($tr % 2 == 0):?>    
                        <tr class="column-color-si-no">
                    <?php else:?>
                        <tr>
                    <?php endif;?>
                        <td><?php echo $value->id_actor;?></td>
                        <td><?php echo $value->nombre;?> <?php echo $value->materno;?></td>
                        <td><?php echo $value->fecha_nacimiento;?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <div>
</main>