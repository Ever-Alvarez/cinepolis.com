<main>
    <div class="div-table">
        <table cellpadding="0" cellspacing="0" border="1" align="center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($directores as $key=>$value):?>
                    <tr>
                        <td><?php echo $value->id_director;?></td>
                        <td><?php echo $value->nombre.' '.$value->paterno;?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</main>