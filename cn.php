<?php
    //conectar a la base de datos
    //$conexion es una variable donde se almacenara la conexión
    //la instrucción mysqli_connect; permite conectarnos a nuestra base de datos
    $conexion=mysqli_connect("localhost", "root", "", "admision");
    //preguntamos si la variable no encontro la base de datos en la variable $conexion, 
    //envia un mensaje de error de conexión
    if(!$conexion){
        echo "Error en la conexión";
    }
?>
