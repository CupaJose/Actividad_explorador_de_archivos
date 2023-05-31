<?php
    session_start();
    $_SESSION["accion"]=(isset($_POST["accion"])&&$_POST!="")? $_POST["accion"]:"Error";
    $ruta="'../../statics/styles/".$_SESSION["casa"].".css'";
    
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href= $ruta>
    <title>Document</title>
</head>
<body>";
        echo "<form action='http://localhost/php/Actividad_explorador_de_archivos/templates/php/registro.php' method='POST' target='_self'>";
        if($_SESSION["accion"]=="Crear_a")
        {
            echo 
            "
                <label class='text'>Nombre del nuevo archivo
                <input class='int_text' type='text' name='nombre_n' required>
                </label>";

        }
        if($_SESSION["accion"]=="Crear_c")
        {
            echo "
                <label class='text'>Nombre de la nueva carpeta
                <input class='int_text' type='text' name='nombre_n' required>
                </label>";

        }
        if($_SESSION["accion"]=="renombrar_a")
        {
            echo

            "
                <label class='text'>Nombre del archivo a renombrar
                <input class='int_text' type='text' name='nombre_v' required>
                </label>
                <label class='text'>Nuevo nombre
                <input class='int_text' type='text' name='nombre_n' required>

                </label>";
        }
        if($_SESSION["accion"]=="renombrar_c")
        {
            echo "

                <label class='text'>Nombre de la carpeta a renombrar
                <input class='int_text' type='text' name='nombre_v' required>
                </label>
                <label class='text'>Nuevo nombre
                <input class='int_text' type='text' name='nombre_n' required>
                </label>";

        }
        if($_SESSION["accion"]=="eliminar_a")
        {
            echo "
                <label class='text'>Nombre del archivo a eliminar
                <input class='int_text' type='text' name='nombre_v' required>
                </label>
                ";

        }
        if($_SESSION["accion"]=="eliminar_c")
        {
            echo "
                <label class='text'>Nombre de la carpeta a eliminar
                <input class='int_text' type='text' name='nombre_v' required>
                </label>
                ";
        }
        echo "<br><br><button type='submit'>Enviar</button>
        <button type='reset'>Borrar</button>
    </form>";
echo "</body>
</html>";
?>