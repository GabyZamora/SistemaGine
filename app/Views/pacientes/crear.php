
<?=$cabecera?>

Crear nuevo paciente

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Ingresar datos del paciente</h5>
        <p class="card-text">
            
        <form method="post" action="<?=site_url('paciente/guardar')?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Nombre Completo</label>
                <input id="nombre" class="form-control" type="text" name="nombre">
            </div>
            <div class="form-group">
                <label for="dui">DUI</label>
                <input id="dui" class="form-control" type="text" name="dui">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input id="telefono" class="form-control" type="text" name="telefono">
            </div>
            <div class="form-group">
                <label for="correo">Correo Electronico</label>
                <input id="correo" class="form-control" type="text" name="correo">
            </div>
            <div class="form-group">
                <label for="fnacimiento">Fecha de Nacimiento</label>
                <input id="fnacimiento" class="form-control" type="date" name="fnacimiento">
            </div>
        </form>
    <div>
</div>
<button class="btn btn-success" type="summit">Guardar</button>
</p>
    </div>
</div>




<?$pie?>
