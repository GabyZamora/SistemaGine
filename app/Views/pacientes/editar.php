
<?=$cabecera?>

<div class="card">
        <div class="card-body">
            <h5 class="card-tittle">Editar Información de Paciente</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('paciente/actualizar')?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$paciente['Idpaciente']?>">
                    <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input id="nombre" value="<?=$paciente['NombrePac']?>" class="form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input id="telefono" value="<?=$paciente['TelPac']?>" class="form-control" type="text" name="telefono">
                    </div>

                    <div class="form-group">
                        <label for="correo">Correo Electronico</label>
                        <input id="correo" value="<?=$paciente['CorreoPac']?>" class="form-control" type="text" name="correo">
                    </div>
                    <div class="form-group">
                        <label for="fnacimiento">Fecha de Nacimiento</label>
                        <input id="fnacimiento" value="<?=$paciente['FechaNacPac']?>" class="form-control" type="text" name="fnacimiento">
                    </div>
                    <div>
                    <button class="btn btn-success" type="submit">Guardar</button>
                </form>
            </p>
        </div>
</div>


</form>
