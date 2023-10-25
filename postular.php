<?php
    $fecha = date("d-m-y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>postular</title>
    <link rel="stylesheet" href="css/estilo_postular.css">
</head>
<body>

    <div class="form-register">
    <form action="grabar_postulacion.php" method="post">
    <section></section>
    <img class="imagen" src="img/logoliceo.png" alt="">

    <h2></h2>


    <input type="hidden" name="fecha_matricula" value="<?php echo $fecha; ?>">

    <label for="">fecha postular</label>
    <p><?php echo $fecha; ?></p>


    <label for="">curso de postulacion</label>
    <select class="box" name="curso_postulacion" required>
                            <option>prekinder</option>
                            <option>kinder</option>
                            <option>1 basico</option>
                            <option>2 basico</option>
                            <option>3 basico</option>
                            <option>4 basico</option>
                            <option>5 basico</option>
                            <option>6 basico</option>
                            <option>7 basico</option>
                            <option>8 basico</option>
                            <option>1 medio</option>
                            <option>2 medio</option>
                            <option>3 medio</option>
                            <option>4 medio</option>
    </select>
<br><br>
    <label for="">comuna</label>
    <select class="box" name="comuna" required>
                            <option>huasco</option>
                            <option>huasco bajo</option>
                            <option>freirina</option>
                            <option>vallenar</option>
                            <option>alto del carmen</option>
                        </select>
    <br> <br>
    <label for="">genero</label>
    <select class="box" name="genero" required>
                            <option>maculino</option>
                            <option>femenino</option>
                            <option>otro</option>
    </select>
    <br><br>
    <label for="">Rut estudiante</label>
    <input class="box" type="text" name="run_estudiante" placeholder="Run estudiante" required>
    <br><br>
    <label for="">Rut apoderado</label>
    <input class="box" type="text" name="run_apoderado" placeholder="Run apoderado" required>
    <br><br>
    <label for="">Nombre del estudiante</label>
    <input class="box" type="text" name="nombre_estudiante" placeholder="Nombre estudiante" required>
    <br><br>
    <label for="">Nombre del apoderado</label>
    <input class="box" type="text" name="nombre_apoderado" placeholder="Nombre apoderado" required>
    <br><br>
    <label for="">Colegio de origen</label>
    <input class="box" type="text" name="colegio_origen" placeholder="Colegio origen" required>
    <br><br>
    <label for="">Correo del apoderado</label>
    <input class="box" type="email" name="curreo_apoderado" placeholder="Correo apoderado" required>
    <br><br>
    <label for="">Telefono</label>
    <input class="box" type="number" name="telefono" placeholder="Telefono+569" required>
    <br><br>
    <label for="">Contacto</label>
    <input class="box" type="number" name="contacto" placeholder="Contacto" required>
    <br><br>
    <label for="">Domicilio</label>
    <input class="box" type="text" name="domicilio" placeholder="Domicilio" required>
    <br><br>
    <label for="">pass</label>
    <input class="box" type="password" name="pass" placeholder="pass" required>
    <br><br>
    <input type="submit" value="postular"  class="submit">
    </section>
    </form>
    </div>
</body>
</html>