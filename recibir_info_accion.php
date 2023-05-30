<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION["accion"]=(isset($_POST["accion"])&&$_POST!="")? $_POST["accion"]:"Error";
        echo 
        "<form action='http://localhost/Curso_Web_2023/Actividad_explorador_de_archivos/registro.php' method='POST' target='_self'
            <label>Nombre
            <input type='text' name='nombre' required>
            </label>
        </form>"
    ?>
</body>
</html>