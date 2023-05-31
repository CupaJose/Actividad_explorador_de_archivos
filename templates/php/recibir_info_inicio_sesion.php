<?php
        session_start();
        if(!isset($_SESSION["user"])){
            $_SESSION["user"] = " ";
        }
        if(!isset($_SESSION["casa"])){
            $_SESSION["casa"] = " ";
        }
        $_SESSION["user"]=(isset($_POST["usuario"])&&$_POST!="")? $_POST["usuario"]: $_SESSION["user"];
        $_SESSION["casa"]=(isset($_POST["casa"])&&$_POST!="")? $_POST["casa"]: $_SESSION["casa"];
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
        echo
        "<form action='http://localhost/php/Actividad_explorador_de_archivos/templates/php/recibir_info_accion.php' method='post' target='_self'>
            <u>Que quieres hacer?</u><br><br>
            <label for='Crear_a'>Crear archivo</label>
            <input class='opcion' type='radio' id='Crear_a' name='accion' value='Crear_a' checked><br>
            <label for='renombrar_a'>Renombrar archivo</label>
            <input type='radio' id='renombrar_a' name='accion' value='renombrar_a'><br>
            <label for='eliminar_a'>Eliminar archivo</label>
            <input type='radio' id='eliminar_a' name='accion' value='eliminar_a'><br><br>
            <label for='Crear_c'>Crear carpeta</label>
            <input type='radio' id='Crear_c' name='accion' value='Crear_c'><br>
            <label for='renombrar_c'>Renombrar carpeta</label>
            <input type='radio' id='renombrar_c' name='accion' value='renombrar_c'><br>
            <label for='eliminar_c'>Eliminar carpeta</label>
            <input type='radio' id='eliminar_c' name='accion' value='eliminar_c'><br><br>
            <button type='submit'>Enviar</button>
            <button type='reset'>Borrar</button>
        </form>";
echo "</body>
</html>";
?>