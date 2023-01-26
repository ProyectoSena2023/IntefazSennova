<?php
session_start();
require 'dbcon.php';

if(isset($_POST['eliminar']))
{
    $usuario_id = mysqli_real_escape_string($con, $_POST['eliminar']);

    $query = "DELETE FROM crear WHERE id='$usuario_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "usuario eliminado";
        header("Location:index.php");  
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "usuario no eliminado";
        header("Location:index.php");  
        exit(0);
    }
}

if(isset($_POST['editar']))
{
    $usuario_id = mysqli_real_escape_string($con, $_POST['usuario_id']);
    
    $name = mysqli_real_escape_string($con, $_POST['especie']);
    $email = mysqli_real_escape_string($con, $_POST['Nombre_cientifico']);
    $telefono = mysqli_real_escape_string($con, $_POST['Nombe_comun']);
    $direccion = mysqli_real_escape_string($con, $_POST['Distribucion']);
    $familia = mysqli_real_escape_string($con, $_POST['Familia']);

    $query = "UPDATE crear SET  especie ='$name',Nombre_cientifico='$email',Nombe_comun='$telefono',Distribucion='$direccion',
               Familia='$familia'    WHERE id='$usuario_id'";
    $query_run = mysqli_query($con, $query);         
    
    if($query_run)
    {
        $_SESSION['message'] = "usuario editado";
      header("Location:index.php");  
      exit(0);
    }
    else
    {
        $_SESSION['message'] = "usuario no editado";
        header("Location:index.php");  
        exit(0);
    }


}

if(isset($_POST['salvar']))
 {
    $name = mysqli_real_escape_string($con, $_POST['especie']);
    $email = mysqli_real_escape_string($con, $_POST['Nombre_cientifico']);
    $telefono = mysqli_real_escape_string($con, $_POST['Nombe_comun']);
    $direccion = mysqli_real_escape_string($con, $_POST['Distribucion']);
    $familia = mysqli_real_escape_string($con, $_POST['Familia']);

    $query = "INSERT INTO crear (especie,Nombre_cientifico,Nombe_comun,Distribucion,
              Familia ) VALUES
        ('$name','$email','$telefono','$direccion','$familia')";

    $query_run = mysqli_query($con,$query);   
    if($query_run) 
    {
      $_SESSION['message'] = "usuario Creado";
      header("Location:usuario.php");  
      exit(0);
    }
    else
    {
    $_SESSION['message'] = "usuario no Creado";
    header("Location:usuario.php");  
    exit(0);
    }
}


?>