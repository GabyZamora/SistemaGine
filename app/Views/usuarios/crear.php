
<?=$cabecera?>

Ingresar nuevo usuario.
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Ingresar datos del Usuario</h5>
        <p class="card-text">
            
    <form method="post" action="<?=site_url('usuario/guardar')?>" enctype="multipart/form-data">


        <div class="form-group">
            <label for="nombre">Nombre Completo</label>
            <input id="nombre" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="usuario">Usuario</label>
            <input id="usuario" class="form-control" type="text" name="usuario">
        </div>

        <div class="form-group">
            <label for="correo">Correo Electronico</label>
            <input id="correo" class="form-control" type="text" name="correo">
        </div>
        <div class="form-group">
            <label for="contra" >Password </label>
            <input id="contra" class="form-control" type="text" name="contra">
        </div>

        <button class="btn btn-success" type="summit">Guardar</button>
        </p>
            </div>
        </div>


    </form>
<?$pie?>
