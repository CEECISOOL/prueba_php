<?=$cabecera?>
<a href="<?=base_url('comercios');?>" class="btn btn-info" type="button">HOME</a>
<hr/>
<div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('actualizarCbu/'.$cbu['id_cbu'])?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="cbu">Cbu:</label>
                        <input id="cbu" value="<?=$cbu['cbu']?>" class="form-control" type="number" name="cbu">
                    </div>
                    <div class="form-group">
                        <label for="alias">Alias:</label>
                        <input id="alias" class="form-control" value="<?=$cbu['alias']?>" type="text" name="alias">
                    </div>
                    <button class="btn btn-success" type="submit">Guardar</button>
                </form>
            </p>
        </div>
</div>

<?=$footer?>