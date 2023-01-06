
<?=$cabecera?>

<div class="card">
    <div class="card-body">
        <h5 class="card-tittle">Editar Servicio</h5>
        <p class="card-text">
            <form method="post" action="<?=site_url('usuario/actualizar')?>" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$servicio['IdUsuario']?>">
                <div class="form-group">
                    <label for="nombre">Nombre Completo</label>
                    <input id="nombre" value="<?=$servicio['NombreSer']?>" class="form-control" type="text" name="nombre">
                </div>

                <div class="form-group">
                    <label for="precio">precio</label>
                    <input id="precio" value="<?=$servicio['PrecioSer']?>" class="form-control" type="text" name="precio">
                </div>

                <div>
                <button class="btn btn-success" type="summit">Guardar</button>
            </form>
        </p>
    </div>
</div>


</form>
