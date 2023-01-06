

<?=$cabecera?>

<a class="btn btn-success" href="<?=base_url('usuario/crear')?>">Crear un nuevo Usuario  </a>
<a class="btn btn-warning" href="<?=base_url('reportes/usuarioReporte')?>">Imprimir</a>

    <div class="container">
        <table id="reporte" class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Asunto</th>
                    <th>Paciente</th>
                    <th>Descripción </th>
                    <th>Fecha Cita</th>
                    <th>Estado</th>
                    <th>Acciones </th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($citas as $cita): ?>


                <tr>
                    <td><?=$cita['IdCita']; ?></td>
                    <td><?=$cita['AsuntoCit']; ?></td>              
                    <td><?=$cita['IdPaciente']; ?> </td>
                    <td><?=$cita['NotaCit']; ?> </td>
                    <td><?=$cita['FechaCit']?></td>
                    <td><?=$cita['Estado']; ?> </td>
                    <td><a href="<?=base_url('cita/editar/'.$cita['IdCita']);?>" class="btn btn-primary" type="button">Editar</button> 
                    <a href="<?=base_url('cita/borrar/'.$cita['IdCita']);?>" class="btn btn-danger" type="button">Borrar</button>
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

