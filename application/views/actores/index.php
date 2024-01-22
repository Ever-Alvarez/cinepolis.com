<main>
    <div class="div-table">
        <table cellpadding="0" cellspacing="0" border="1">
            <thead>
                <tr>
                    <th class="tg-0lax">#</th>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($actores as $key=>$value):?>
                    <tr>
                        <td><?php echo $value->id_actor;?></td>
                        <td><?php echo $value->nombre;?> <?php echo $value->materno;?></td>
                        <td><?php echo $value->fecha_nacimiento;?></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    <div>
</main>