
<?=$cabecera?>

<div class="card">
        <div class="card-body">
            <h5 class="card-tittle">Editar Información de Paciente</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('paciente/actualizar')?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$paciente['IdPaciente']?>">
                    <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input id="nombre" value="<?=$paciente['NombrePac']?>" class="form-control" type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="dui">DUI</label>
                        <input id="dui" value="<?=$paciente['DuiPac']?>" class="form-control" type="text" name="dui">
                    </div>
                    <div class="form-group">
                        <label for="inputState">Seleccione departamento</label>
                        <select id="inputState" class="form-control" id="departamento" name="departamento" size="1">
                            <option value="<?=$paciente['IdDepartamento']?>">Seleccione</option>
                            <?php foreach($departamentos as $departamento): ?>
                                <option value="<?=$departamento['IdDepartamento']?>"><?=$departamento['NombreDep']?></option>
                            <?php endforeach?>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="inputState">Seleccione municipio</label>
                        <select id="inputState" class="form-control" id="municipio" name="municipio" size="1">
                            <option value="0">Seleccione...</option>
                            <?php foreach($municipios as $municipio): ?>
                                <option value="<?=$municipio['IdMunicipio']?>"><?=$municipio['NombreMun']?></option>
                            <?php endforeach?>
                        </select>
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
