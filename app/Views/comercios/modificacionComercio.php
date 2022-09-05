<?=$cabecera?>
<a href="<?=base_url('comercios');?>" class="btn btn-info" type="button">HOME</a>
<hr/>
<div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('actualizar/'.$comercio['id_comercio'])?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="razon_social">Razon Social:</label>
                        <input id="razon_social" value="<?=$comercio['razon_social']?>" class="form-control" type="text" name="razon_social">
                    </div>
                    <div class="form-group">
                        <label for="cuit">Cuit:</label>
                        <input id="cuit" class="form-control" value="<?=$comercio['cuit']?>" type="number" name="cuit">
                    </div>
                    <button class="btn btn-success" type="submit">Guardar</button>
                </form>
            </p>
        </div>
</div>

<?=$footer?>