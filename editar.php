<?php
session_start();
require 'dbcon.php';

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Editar Usuario</title>
</head>

<body>

    <div class="container mt-5">
        <?php include('mensaje.php')
        ?>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar Especie
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $usuario_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM crear WHERE id = '$usuario_id'";
                            $query_run = mysqli_query($con,$query);

                          if(mysqli_num_rows( $query_run)>0)
                          {
                              $usuario = mysqli_fetch_array($query_run);
                              ?>
                              
                              <form action="code.php" method="POST">
                              <input type="hidden" name="usuario_id" value="<?= $usuario['id'] ?>">

                              <div class="mb-3">
                                <label style="color:red ;">Especie</label>
                                <input type="text" name="especie"  value="<?=$usuario['especie']; ?>"class="form-control">
                            </div>
                            <div class="mb-3">
                                <label style="color:red ;">Nombre Cientifico</label>
                                <input type="text" name="Nombre_cientifico" value="<?=$usuario['Nombre_cientifico']; ?> "class="form-control">
                            </div>
                            <div class="mb-3">
                                <label style="color:red ;">Nombre Comun</label>
                                <input type="text" name="Nombe_comun" value="<?=$usuario['Nombe_comun']; ?> "class="form-control">
                            </div>
                            <div class="mb-3">
                                <label style="color:red ;">Distribucion</label>
                                <input type="text" name="Distribucion" value="<?=$usuario['Distribucion']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label style="color:red ;">Familia</label>
                                <input type="text" name="Familia" value="<?=$usuario['Familia']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                               
                                <button type="submit" name="editar" class="btn btn-primary">
                                    Editar 
                                </button>
                            </div>                        

                            
                        </form>
                        <?php
                          }
                          else
                          {
                            echo "<h4> no funciona id </h4>";
                          }
                            
                        }    
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>