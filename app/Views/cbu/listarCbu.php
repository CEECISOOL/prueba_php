<?=$cabecera?>
<br/>
<hr/> 
<a href="<?=base_url('comercios');?>" class="btn btn-info" type="button">HOME</a>
<hr/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Id de comercio</th>
                    <th>Alias</th>
                    <th>CBU</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>

           <?php foreach($cbus as $cbu): ?>

                <tr>                    
                    <td><?= $cbu['comercios_id']; ?></td>
                    <td><?= $cbu['alias']; ?></td>
                    <td><?= $cbu['cbu']; ?></td>
                    <td>
                        <a href="<?=base_url('editarCbu/'.$cbu['id_cbu']);?>" class="btn btn-info" type="button">EDITAR</a>
                        <a href="<?=base_url('borrarCbu/'.$cbu['id_cbu']);?>" class="btn btn-danger" type="button">BORRAR</a>
                    </td>
                </tr>      
        <?php endforeach; ?>
            </tbody>
        </table>

        <a class="btn btn-success" href="<?=base_url('altaCbu/'.$idComercio)?>">NUEVO CBU/ALIAS</a>

<?=$footer?>
