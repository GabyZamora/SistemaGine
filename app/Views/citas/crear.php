
<?=$cabecera?>

Crear nueva cita

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Ingresar nueva Cita</h5>
        <p class="card-text">
            
        <form method="post" action="<?=site_url('cita/guardar')?>" enctype="multipart/form-data">
        <div class="form-group">
            <label for="AsuntoCit">Asunto de la cita</label>
            <input id="AsuntoCit" class="form-control" type="text" name="AsuntoCit">
        </div>
        <div class="form-group">
        <label for="paciente">Seleccione paciente</label>
            <select id="paciente" class="form-control" id="paciente" name="paciente" size="1">
                <option value="0">Seleccione...</option>
                <?php foreach($pacientes as $paciente): ?>
                    <option value="<?=$paciente['IdPaciente']?>"><?=$paciente['NombrePac']?></option>
                <?php endforeach?>
            </select>
        </div>
        <div class="form-group">
            <label for="NotaCit">Nota de cita</label>
            <input id="NotaCit" class="form-control" type="text" name="NotaCit">
        </div>
        <div class="form-group">
            <label for="FechaCit">Fecha de la cita</label>
            <input id="FechaCit" class="form-control" type="text" name="FechaCit">
        </div>
        <div class="form-group col-md-4">
            <label for="estado">Estado</label>
            <select id="estado" class="form-control" id="estado" name="estado" size="1">
                <option value="0">Seleccione...</option>
                <?php foreach($estados as $estado): ?>
                    <option value="<?=$estado['IdEstado']?>"><?=$estado['NombreEstado']?></option>
                <?php endforeach?>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="pago">Tipo de Pago</label>
            <select id="pago" class="form-control" id="pago" name="pago" size="1">
                <option value="0">Seleccione...</option>
                <?php foreach($pagos as $pago): ?>
                    <option value="<?=$pago['IdPago']?>"><?=$pago['NombrePag']?></option>
                <?php endforeach?>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="servicio">Seleccione el servicio</label>
            <select id="servicio" class="form-control" id="servicio" name="servicio" size="1">
                <option value="0">Seleccione...</option>
                <?php foreach($servicios as $servicio): ?>
                    <option value="<?=$servicio['IdServicio']?>"><?=$servicio['NombreSer']?></option>
                <?php endforeach?>
            </select>
        </div>
        <button class="btn btn-success" type="submit">Guardar</button>
        </form>

            </p>
        </div>
    </div>


<?$pie?>
