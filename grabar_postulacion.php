<?php
    //conectamos la base de datos sismos o abrimos
    include '../cn.php';

    //ingresamos a la programación cuando el usuareio presione el botón submit
    //aplicamos el metodo POST para indicar que vienen datos en los inputs run, nombre, acceso y pass
    //la instrucción !empty pregunta si vienen datos
    if(!empty($_POST))
    {
        //pasamos los datos que están en los inputs run, nombre, acceso y pass
        //a las variables $run - $nombre - $acceso y $pass
        //a través de método POST
        $run_estudiante     = $_POST['run_estudiante'];
        $nombre_estudiante  = $_POST['nombre_estudiante'];
        $run_apoderado      = $_POST['run_apoderado'];  
        $nombre_apoderado   = $_POST['nombre_apoderado'];
        $fecha_matricula    = $_POST['fecha_matricula'];
        $colegio_origen     = $_POST['colegio_origen']; 
        $curso_postulacion  = $_POST['curso_postulacion'];
        $domicilio          = $_POST['domicilio'];
        $comuna             = $_POST['comuna'];  
        $contacto           = $_POST['contacto'];
        $curreo_apoderado   = $_POST['curreo_apoderado'];
        $telefono           = $_POST['telefono']; 
        $genero             = $_POST['genero']; 
        $pass               = $_POST['pass']; 
        $acceso             = 2; 

        echo $run_estudiante.    "<br>";
        echo $nombre_estudiante. "<br>";
        echo $run_apoderado.     "<br>";
        echo $nombre_apoderado.  "<br>";
        echo $curso_postulacion. "<br>";
        echo $colegio_origen.    "<br>";
        echo $domicilio.         "<br>";
        echo $comuna.            "<br>";
        echo $contacto.          "<br>";
        echo $telefono.          "<br>";
        echo $curreo_apoderado.  "<br>";
        echo $fecha_matricula.   "<br>";
        echo $genero.            "<br>";
        echo $pass.              "<br>";
        echo $acceso.            "<br>";
        //exit;

        //procedemos agregar nuestro registro a la tabla usuarios
        //preguntamos si ya existe el usuario a través de su run en la tabla FROM usuarios
        $query = mysqli_query($conexion,"SELECT * FROM postulacion WHERE run_estudiante = '$run_estudiante'");
        $result = mysqli_num_rows($query);
        if($result > 0){
            //en caso que la variable $result es mayo a 0 entonces existe el usuario
            //lo encontro a través del campo run
            //desplegamos mensajes que no puede agregar porque existe usuario
            //a través de javascript con la etiqueta <script> y con la instrucción Alert
            echo '<script>
                alert("Existe Usuario, no se puede agregar...");
                window.history.go(-1);
                </script>';
            exit; 
                    
        }else{
            //de lo contario la variable $result es igual 0
            //porque no encontro el run lo podemos agregar como nuevo registro
            //a través de la instrucción INSERT INTO
            $insertar = "INSERT INTO postulacion (run_estudiante, nombre_estudiante, run_apoderado, nombre_apoderado, fecha_matricula, colegio_origen, curso_postulacion, curreo_apoderado, contacto, telefono, domicilio, genero, comuna) VALUES ('$run_estudiante', '$nombre_estudiante', '$run_apoderado', '$nombre_apoderado', '$fecha_matricula', '$colegio_origen', '$curso_postulacion', '$curreo_apoderado', '$contacto', '$telefono', '$domicilio', '$genero', '$comuna')";
            $resultado = mysqli_query($conexion, $insertar);

            $insertarxxx = "INSERT INTO usuarios (run, nombre, acceso, pass) VALUES ('$run_estudiante', '$nombre_estudiante', '$acceso', '$pass')";
            $resultadoxxx = mysqli_query($conexion, $insertarxxx);


            echo '<script>
            alert("Registro Agregado Exitosamente...");
                window.history.go(-1);
                </script>';
            exit; 
        }
    }
?>


