
<?=$cabecera?>

Crear nuevo servicio

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Ingresar datos del Servicio</h5>
        <p class="card-text"
        <form method="post" action="<?=site_url('usuario/guardar')?>" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nombre">Nombre de Servicio</label>
            <input id="nombre" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input id="precio" class="form-control" type="text" name="precio">
        </div>
        <div>
        </div>
        <button class="btn btn-success" type="summit">Guardar</button>
    </p>
        </div>
    </div>
</form>


<?$pie?>
