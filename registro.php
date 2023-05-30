<?php
    session_start();
    $_SESSION["nombre_n"]=(isset($_POST["nombre_n"])&&$_POST!="")? $_POST["nombre_n"]:"Error";
    $_SESSION["nombre_v"]=(isset($_POST["nombre_v"])&&$_POST!="")? $_POST["nombre_v"]:"Error";
    if($_SESSION["accion"]=="Crear_a")
    {
        fopen($_SESSION["nombre_n"], "x+");
    }
    if($_SESSION["accion"]=="renombrar_a")
    {
        rename($_SESSION["nombre_v"],$_SESSION["nombre_n"]);
    }
    if($_SESSION["accion"]=="eliminar_a")
    {
        unlink($_SESSION["nombre_v"]);
    }
    if($_SESSION["accion"]=="Crear_c")
    {
        mkdir($_SESSION["nombre_n"]);
    }
    if($_SESSION["accion"]=="renombrar_c")
    {
        rename($_SESSION["nombre_v"],$_SESSION["nombre_n"]);
    }
    if($_SESSION["accion"]=="eliminar_c")
    {
        rmdir($_SESSION["nombre_v"]);
    }
?>