<?php
  session_start();
  require 'dbcon.php';

?>

<?php include('include/header.php')?>

    <div class="container mt-4">

       <?php 
           include('mensaje.php');
       ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalles de especie
                            <a href="usuario.php" class="btn btn_primary float-end" style="color:blue;">Ingresar Datos</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Especie</th>
                                    <th>Nombre Cientifico</th>
                                    <th>Nombre Comun</th>
                                    <th>Distribucion</th>
                                    <th>Familia</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM crear ";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $usuario) {
                                        
                                ?>
                                        <tr>
                                            <td><?= $usuario['id'];?></td>
                                            <td><?= $usuario['especie'];?></td>
                                            <td><?= $usuario['Nombre_cientifico'];?></td>
                                            <td><?= $usuario['Nombe_comun'];?></td>
                                            <td><?= $usuario['Distribucion'];?></td>
                                            <td><?= $usuario['Familia'];?></td>
                                            <td>
                                                <a href="vista.php?id=<?= $usuario['id'];?>" class="btn btn-info btn-sm">Ver</a>
                                                <a href="editar.php?id=<?= $usuario['id'];?>" class="btn btn-success btn-sm">Editar</a>                                               
                                                <form action="code.php"method="POST" class="d-inline">
                                                    <button type="submit" name ="eliminar" value="<?=$usuario['id'];?>
                                                    "class="btn btn-danger btn-sm">Eliminar</button>
                                                </form>   
                                            </td>
                                        </tr>

                                <?php
                                    }
                                } else {
                                    echo "<h5>no record</h5>";
                                }
                                ?>

                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('include/footer.php');?>
