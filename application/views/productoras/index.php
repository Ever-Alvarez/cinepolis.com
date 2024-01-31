<?php
    $tr = 0;
?>
<main>
    <div class="div-table">
        <div class="head-table">
            <button class="btn-Agregar">Agregar Productora</button>
        </div>
        <table cellpadding="0" cellspacing="0" border="1">
            <thead>
                <tr class="column-color-si-no">
                    <th class="th-id">#</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>URL</th>
                    <th>Calle</th>
                    <th>Colonia</th>
                    <th>Codigo Postal</th>
                    <th>Numero</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($productoras as $key=>$value): ?>
                    <?php $tr = $tr + 1; ?>
                    <?php if($tr % 2 == 0):?>    
                        <tr class="column-color-si-no">
                    <?php else:?>
                        <tr>
                    <?php endif;?>
                        <td><?php echo $value->id_productora; ?></td>
                        <td><?php echo $value->nombre; ?></td>
                        <td><?php echo $value->telefono; ?></td>
                        <td>
                            <a href="<?php echo $value->URL; ?>" tarjet="_blank">
                                <?php echo $value->URL; ?>
                            </a>
                        </td>
                        <td><?php echo $value->calle; ?></td>
                        <td><?php echo $value->colonia; ?></td>
                        <td><?php echo $value->codigo_postal; ?></td>
                        <td><?php echo $value->numero; ?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</main>