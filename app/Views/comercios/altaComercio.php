<?=$cabecera?>
<a href="<?=base_url('comercios');?>" class="btn btn-info" type="button">HOME</a>
<hr/>
    <h2>Formulario de alta de comercios</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('guardar/'.session('id_user'));?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="razon_social">Razon Social:</label>
                        <input id="razon_social" class="form-control" type="text" name="razon_social">
                    </div>
                    <div class="form-group">
                        <label for="cuit">Cuit:</label>
                        <input id="cuit" class="form-control" type="number" name="cuit">
                    </div>
                    <!-- <div class="form-group">
                        <label for="cbu">CBU:</label>
                        <input id="cbu" class="form-control" type="number" name="cbu">
                    </div>
                    <div class="form-group">
                        <label for="alias">Alias:</label>
                        <input id="alias" class="form-control" type="text" name="alias">
                    </div>                    -->
                    <button class="btn btn-success" type="submit">Guardar</button>
                </form>

            </p>
        </div>
    </div>

    
<?=$footer?>
