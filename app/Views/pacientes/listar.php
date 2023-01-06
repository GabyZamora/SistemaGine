

<?=$cabecera?>

<a class="btn btn-success" href="<?=base_url('usuario/crear')?>">Crear un nuevo Usuario  </a>
<a class="btn btn-warning" href="<?=base_url('reportes/usuarioReporte')?>">Imprimir</a>

    <div class="container">
        <table id="reporte" class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>DUI</th>
                    <th>Telefono </th>
                    <th>Correo Electronico</th>
                    <th>Fecha de Nacimiento </th>
                    <th>Acciones </th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($pacientes as $paciente): ?>


                <tr>
                    <td><?=$paciente['IdPaciente']; ?></td>
                    <td><?=$paciente['NombrePac']; ?></td>
                    <td><?=$paciente['DuiPac']; ?> </td>
                    <td><?=$paciente['TelPac']; ?> </td>
                    <td><?=$paciente['CorreoPac']; ?> </td>
                    <td><?=$paciente['FechaNacPac']; ?> </td>
                    <td><a href="<?=base_url('usuario/editar/'.$paciente['IdUsuario']);?>" class="btn btn-primary" type="button">Editar</button> 
                    <a href="<?=base_url('usuario/borrar/'.$paciente['IdUsuario']);?>" class="btn btn-danger" type="button">Borrar</button>
                    </td>
                </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

        <!----?php echo $paginador->simpleLinks(); ?--->
    </div>


        </div><!-- /.container-fluid -->
    </section>

<?=$piepagina?>

