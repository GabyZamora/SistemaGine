

<?=$cabecera?>

<a class="btn btn-success" href="<?=base_url('usuario/crear')?>">Crear un nuevo Usuario</a>
<a class="btn btn-warning" href="<?=base_url('reportes/usuarioReporte')?>">Imprimir</a>

    <div class="container">
        <table id="reporte" class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Correo Electronico</th>
                    <th>Acciones </th>
                </tr>
            </thead>
            <tbody>

            <?php foreach($usuarios as $usuario): ?>


                <tr>
                    <td><?=$usuario['IdUsuario']; ?></td>
                    <td><?=$usuario['NombreUsuario']; ?></td>
                    <td><?=$usuario['Usuario']; ?> </td>
                    <td><?=$usuario['CorreoUsuario']; ?> </td>
                    <td><a href="<?=base_url('usuario/editar/'.$usuario['IdUsuario']);?>" class="btn btn-primary" type="button">Editar</button> 
                    <a href="<?=base_url('usuario/borrar/'.$usuario['IdUsuario']);?>" class="btn btn-danger" type="button">Borrar</button>
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

