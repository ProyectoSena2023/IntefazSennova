<?php
session_start();

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

    <div class="container mt-5">
        <?php include('mensaje.php')
        ?>

       

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Crear usuario
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label >Especie </label>
                                <input type="text" name="especie"required class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Nombre Cientifico</label>
                                <input type="text" name="Nombre_cientifico" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Nombre Comun</label>
                                <input type="text" name="Nombe_comun" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Distribucion</label>
                                <input type="text" name="Distribucion" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Familia</label>
                                <input type="text" name="Familia" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="salvar" class="btn btn-primary">Guardar</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>