

<?=$cabecera?>

<a class="btn btn-success" href="<?=base_url('servicio/crear')?>">Crear un nuevo servicio  </a>
<a class="btn btn-warning" href="<?=base_url('reportes/servicioReporte')?>">Imprimir</a>

    <div class="container">
        <table id="reporte" class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Nombre de Servicio</th>
                    <th>Precio</th>
                    <th>Acciones </th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($servicios as $servicio): ?>


                <tr>
                    <td><?=$servicio['Idservicio']; ?></td>
                    <td><?=$servicio['NombreSer']; ?></td>
                    <td><?=$servicio['PrecioSer']; ?> </td>
                    <td><a href="<?=base_url('servicio/editar/'.$servicio['IdServicio']);?>" class="btn btn-primary" type="button">Editar</button> 
                    <a href="<?=base_url('servicio/borrar/'.$servicio['IdServicio']);?>" class="btn btn-danger" type="button">Borrar</button>
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

