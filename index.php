
<?php
    //ALGORITMO RECUPERADO DESDE ELA RCHIVO header.php
    //solamente para activar la cuenta si es apoderado o administrador
    //activamos la sesión
    session_start();
    if(empty($_SESSION['active']))
    {
        header("location: ../");
    }
    $usuario = $_SESSION['run']; 
    $nombre  = $_SESSION['nombre'];  
    $acceso  = $_SESSION['acceso'];    

    include '../cn.php';

    if($acceso==2)
    {
        //busco los datos del apoderado y alumno en la tabla postulación
        //ALGORITMO SACADO DESDE EL ARCHIVO eliminar_registro.php
        $query = mysqli_query($conexion,"SELECT * FROM postulacion WHERE run_estudiante = '$usuario'");
        //mysql_close($conexion);
        $result = mysqli_num_rows($query);
        if($result > 0){
            $data = mysqli_fetch_assoc($query);
            $run_estudiante  = $data['run_estudiante'];
            $estudiante      = $data['estudiante'];
            $apoderado       = $data['apoderado'];
            $curso           = $data['curso'];
            $contacto        = $data['contacto'];
            $correo          = $data['correo'];

            //busco en que lugar quedo el estudiae según el curso que está postulando
            //ALGORITMO de usuarios.php
            $sql = "SELECT * FROM postulacion WHERE curso = '$curso' ORDER BY id"; 
            $result = mysqli_query($conexion,$sql);
            $contar = 0; $lugar = 0;
            while ($data = mysqli_fetch_array($result))
            {
                $run = $data['run_estudiante'];
                $contar = $contar + 1;
                if ($run_estudiante == $run)
                {
                    $lugar = $contar;
                }
                
            }           

        }else{
            echo '<script>
                alert("ESTUDIANTE NO REALIZO EL PROCESO DE POSTULACIÓN....");
                window.history.go(-1);
                </script>';
            exit;
        } 
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/liceo_san.png"> <!-- para colocar una imagen formato icono -->
    <title>Postulación Estudiante</title>
</head>
<body>
    <?php
        if($acceso == 2)
        {
            //datos estudiante
    ?>
            <img src="img/liceo_san.png" alt="" width="100">
            <h1>INFORMACIÓN DEL POSTULANTE</h1>
            <table class="tabla">
                <tr>
                    <td>ESTUDIANTE</td>
                    <td>:</td>
                    <td> <?php echo $estudiante;?> </td>
                </tr>
                <tr>
                    <td>CURSO A POSTULAR</td>
                    <td>:</td>
                    <td> <?php echo $curso;?> </td>
                </tr>
                <tr>
                    <td>LISTA DE ESPERA</td>
                    <td>:</td>
                    <td> <?php echo $lugar;?> </td>
                </tr>
                <tr>
                    <td>DE UN TOTAL DE POSTULANTES AL MISMO CURSO</td>
                    <td>:</td>
                    <td> <?php echo $contar;?> </td>
                </tr>
                <tr>
                    <td>APODERADO(A)</td>
                    <td>:</td>
                    <td> <?php echo $apoderado;?> </td>
                </tr>
                <tr>
                    <td>CONTACTO</td>
                    <td>:</td>
                    <td> <?php echo $contacto;?> </td>
                </tr>
                <tr>
                    <td>CORREO ELECTRÓNICO</td>
                    <td>:</td>
                    <td> <?php echo $correo;?> </td>
                </tr>
            </table>           
            <br>
            <a class="boton_postular" href="cerrar.php">CERRAR SESIÓN</a>
    <?php
        }else{
            //administrador
    ?>

    <?php
        }
    ?>
</body>
</html>
