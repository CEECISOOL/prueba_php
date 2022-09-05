<?=$cabecera?>
<a href="<?=base_url('comercios');?>" class="btn btn-info" type="button">HOME</a>
<hr/>
    <h2>Formulario para agregar nuevo cbu/alias</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('guardarCbu/'.$comercios_id);?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="cbu">CBU:</label>
                        <input id="cbu" class="form-control" type="number" name="cbu">
                    </div>
                    <div class="form-group">
                        <label for="alias">Alias:</label>
                        <input id="alias" class="form-control" type="text" name="alias">
                    </div>                
                    <button class="btn btn-success" type="submit">Guardar</button>
                </form>
<h1><?=$comercios_id?></h1>
            </p>
        </div>
    </div>

    
<?=$footer?>
