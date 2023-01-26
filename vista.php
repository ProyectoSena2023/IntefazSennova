<?php

require 'dbcon.php';

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Ver Usuario</title>
</head>

<body>

    <div class="container mt-5">
             

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ver Especie
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


                              <div class="mb-3">
                                <label style="color:red ;">Especie</label>
                                  <p class="form-control">
                                   <?=$usuario['especie']; ?>  
                                </p>
                            </div>
                            <div class="mb-3">
                                <label style="color:red ;">Nombre Cientifico</label>                                
                                <p class="form-control">
                                   <?=$usuario['Nombre_cientifico']; ?> 
                                </p>   
                            </div>
                            <div class="mb-3">
                                <label style="color:red ;">Nombre Comun</label>
                                <p class="form-control">
                                   <?=$usuario['Nombe_comun']; ?> 
                                </p>
                            </div>
                            <div class="mb-3">
                                <label style="color:red ;">Distribucion</label>                               
                                <p class="form-control">
                                   <?=$usuario['Distribucion']; ?> 
                                </p>  
                            </div>
                            <div class="mb-3">
                                <label style="color:red ;">Familia</label>                               
                                <p class="form-control">
                                   <?=$usuario['Familia']; ?> 
                                </p>  
                            </div>                                                         
                       
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