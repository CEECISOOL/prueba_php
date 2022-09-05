<?=$cabecera?>
<h3>Sistema de comercios, bienvenido nuevamente <?= session('name'); ?>!</h3>
<br/>
<a class="btn btn-success" href="<?=base_url('alta')?>">Alta de comercio</a>
<hr/> 
 
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Id de comercio</th>
                    <th>Id de usuario</th>
                    <th>Razon Social</th>
                    <th>CUIT</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>

           <?php foreach($comercios as $comercio): ?>
                <?php if ((session('id_user'))==($comercio['user_id'])): ?>

                <tr>
                    <td><?= $comercio['id_comercio']; ?></td>
                    <td><?= $comercio['user_id']; ?></td>
                    <td><?= $comercio['razon_social']; ?></td>
                    <td><?= $comercio['cuit']; ?></td> 
                    <td>
                        <a href="<?=base_url('editar/'.$comercio['id_comercio']);?>" class="btn btn-info" type="button">EDITAR</a>
                        <a href="<?=base_url('borrar/'.$comercio['id_comercio']);?>" class="btn btn-danger" type="button">BORRAR</a>
                        <a href="<?=base_url('cbu/'.$comercio['id_comercio']);?>" class="btn btn-success" type="button">CBU/ALIAS</a>
                    </td>
                </tr>      
                 <?php endif ?>
        <?php endforeach; ?>
            </tbody>
        </table>
 
<?=$footer?>
