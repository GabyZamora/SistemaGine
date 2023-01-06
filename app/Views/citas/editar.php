
<?=$cabecera?>

<div class="card">
    <div class="card-body">
        <h5 class="card-tittle">Editar Cita</h5>
        <p class="card-text">
            <form method="post" action="<?=site_url('usuario/actualizar')?>" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$cita['IdUsuario']?>">
                <div class="form-group">
                    <label for="AsuntoCit">Asunto de Cita</label>
                    <input id="AsuntoCit" value="<?=$cita['AsuntoCit']?>" class="form-control" type="text" name="AsuntoCit">
                </div>
                <div class="form-group">
                    <label for="IdPaciente">Paciente</label>
                    <input id="IdPaciente" value="<?=$cita['IdPaciente']?>"class="form-control" type="text" name="IdPaciente">
                </div>
                <div class="form-group">
                    <label for="FechaCit">Fecha de la Cita</label>
                    <input id="FechaCit" value="<?=$cita['FechaCit']?>" class="form-control" type="date" name="FechaCit">
                </div>
                <div class="form-group">
                    <label for="NotaCit">Nota de Cita</label>
                    <input id="NotaCit" value="<?=$cita['NotaCit']?>" class="form-control" type="text" name="NotaCit">
                </div>
                <div class="form-group">
                    <label for="IdEstado">Estado</label>
                    <input id="IdEstado" value="<?=$cita['IdEstado']?>" class="form-control" type="text" name="IdEstado">
                </div>
                <div class="form-group">
                    <label for="IdPago">Tipo de Pago</label>
                    <input id="IdPago" value="<?=$cita['IdPago']?>" class="form-control" type="text" name="IdPago">
                </div>
                <div class="form-group">
                    <label for="IdServicio" >Servicio</label>
                    <input id="IdServicio" value="<?=$cita['IdServicio']?>" class="form-control" type="password" name="IdServicio">
                </div>
                <div>
                <button class="btn btn-success" type="submit">Guardar</button>
            </form>
        </p>
    </div>
</div>


</form>
